<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

require_once('include/MVC/Controller/SugarController.php');

class AOS_InvoicesController extends SugarController {
	protected $_prevCloseDate = '';
	function action_editview() {
		global $mod_string;

		$this->view = 'edit';
		$GLOBALS['view'] = $this->view;
		
		if (isset($_REQUEST['aos_quotes_id'])) {
			$query = "SELECT * FROM aos_quotes WHERE id = '{$_REQUEST['aos_quotes_id']}'";
			$result = $this->bean->db->query($query, true);
			$row = $this->bean->db->fetchByAssoc($result);
			$this->bean->name = $row['name'];
			
			if (isset($row['billing_account_id'])) {
				$_REQUEST['account_id'] = $row['billing_account_id'];
			}
			
			if (isset($row['billing_contact_id'])) {
				$_REQUEST['contact_id'] = $row['billing_contact_id'];
			}
		}


		if (isset($_REQUEST['account_id'])) {
			$query = "SELECT * FROM accounts WHERE id = '{$_REQUEST['account_id']}'";
			$result = $this->bean->db->query($query, true);
			$row = $this->bean->db->fetchByAssoc($result);
			$this->bean->billing_account_id = $row['id'];
			$this->bean->billing_account = $row['name'];
			$this->bean->billing_address_street = $row['billing_address_street'];
			$this->bean->billing_address_city = $row['billing_address_city'];
			$this->bean->billing_address_state = $row['billing_address_state'];
			$this->bean->billing_address_postalcode = $row['billing_address_postalcode'];
			$this->bean->billing_address_country = $row['billing_address_country'];
			$this->bean->shipping_address_street = $row['shipping_address_street'];
			$this->bean->shipping_address_city = $row['shipping_address_city'];
			$this->bean->shipping_address_state = $row['shipping_address_state'];
			$this->bean->shipping_address_postalcode = $row['shipping_address_postalcode'];
			$this->bean->shipping_address_country = $row['shipping_address_country'];
		}	
		
		if (isset($_REQUEST['contact_id'])) {
			$query = "SELECT id,first_name,last_name FROM contacts WHERE id = '{$_REQUEST['contact_id']}'";
			$result = $this->bean->db->query($query, true);
			$row = $this->bean->db->fetchByAssoc($result);
			$this->bean->billing_contact_id = $row['id'];
			$this->bean->billing_contact = $row['first_name'].' '.$row['last_name'];
			   //Add By 20161025
			$this->bean->source_code_c = "AOS_Contracts";
		//end 20161025
		}
		
		
	}



	public function pre_save()
	{

		$invoiceFocus = new AOS_Invoices;
		$invoiceFocus->retrieve($_REQUEST['record']);

		if (isset($invoiceFocus->id))
			$this->_prevCloseDate = $invoiceFocus->closed_date_c;

		parent::pre_save();
//逾期天数=当前日期 - 到期日期 or 结清日期-到期日期 or 关闭日期-到期日期（优先级递增）
		if ($this->bean->due_date!=""){
			if ($this->bean->closed_date_c!=""){
				$this->bean->late_days_c=$this->CalDaysBetweenDate($this->bean->closed_date_c,$this->bean->due_date);
			}
			elseif ($this->bean->clear_date_c!="") {
				$this->bean->late_days_c=$this->CalDaysBetweenDate($this->bean->clear_date_c,$this->bean->due_date);
			}
			else {
				global $timedate;
				$this->bean->late_days_c=$this->CalDaysBetweenDate($timedate->nowDb(),$this->bean->due_date);
			}
		}
		else{
			$this->bean->late_days_c=0;
		}
		
		//实现状态改为已付时，关闭日期更新为当前日期
		if ($this->bean->status=="Paid"&&$this->bean->closed_date_c==""){
			global $timedate;
			$this->bean->closed_date_c=date_format(date_create($timedate->nowDb()),"Y-m-d");
		}
		if ($this->bean->status=="PartedPaid") {
			$total_amount=preg_replace("/,/", "", $this->bean->total_amount);
			$amount_c =preg_replace("/,/", "", $this->bean->amount_c);
			$this->bean->unpaied_amount_c=number_format(($total_amount-$amount_c),'2','.',',');
		}
		//$this->bean->unpaied_amount_c=($this->bean->total_amount)-($this->bean->amount_c);
	}

	public function post_save()
	{
		//判断状态为未付或部分付款，是否手工录入了关闭日期
		if ($this->_prevCloseDate==""&&$this->bean->closed_date_c!=""){
			if ($this->bean->status=="Unpaid"||$this->bean->status=="PartedPaid") {
            //Todo:未付或部分付款，则手动关闭，手动关闭后，未付的部分形成一个新的收支项
			}
		}

		$productQuoteBean=BeanFactory::getBean('AOS_Products_Quotes');
		$quotesBeanList=$productQuoteBean->get_full_list(
			'name',
			"aos_products_quotes.parent_id='".$this->bean->id."'"
			);

		foreach($quotesBeanList as $quoteBean){

			$quote = BeanFactory::getBean('HAOS_Revenues_Quotes',$quoteBean->haos_revenues_quotes_id_c);
			$quote->aos_invoices_id_c=$this->bean->id;
			$quote->due_date=$this->bean->due_date;
			$quote->aos_products_quotes_id_c=$quoteBean->id;
			$quote->clear_status="Cleared";
			$quote->save(false,false);
			
			$aos_quoteBean= BeanFactory::getBean('AOS_Products_Quotes',$quoteBean->id);
			$aos_quoteBean->parent_id=$this->bean->id;
			$aos_quoteBean->parent_type=$this->bean->object_name;
			$aos_quoteBean->save();

		}
		parent::post_save();
	}

	function CalDaysBetweenDate($Date1,$Date2){
		$Days= date_diff(date_create($Date2),date_create($Date1))->format("%R%a");
		return $Days;
	}
}

?> 
