<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');
require_once('modules/HAA_Import_Datas/GetImportDatas.php');

class HAA_Import_SetsViewDetail extends ViewDetail {

	function __construct(){
		parent::__construct();
	}

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
    function HAA_Import_SetsViewDetail(){
    	$deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
    	if(isset($GLOBALS['log'])) {
    		$GLOBALS['log']->deprecated($deprecatedMessage);
    	}
    	else {
    		trigger_error($deprecatedMessage, E_USER_DEPRECATED);
    	}
    	self::__construct();
    }


    function display(){
        echo '<div class="modal" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%">
                <div class="modal-dialog">
                    <div class="modal-content" style="width: 250px; height:90px; margin:250px 50px 40px 250px ; ">
                        <img src="themes/SuiteR_HANDALM/images/img_loading.gif?v=6T2wqZkzRRtQXSbbOJRC2A" align="absmiddle" style="margin:40px 0px 40px 50px ; "> 
                        <b>正在上传文档, 请等待...</b>
                    </div>
                </div>
            </div>';
    	parent::display();
        $this->displayDocument();
    	$this->displayTabsHtml();

    }

    function displayDocument(){
        $document = BeanFactory::getBean('Documents', $this->bean->document_id_c);
        echo "<script>setDocId('".$this->bean->document_id_c."');
                      setDocName('".$document->document_name."');</script>";
    }

    function displayTabsHtml(){
        echo '<script src="modules/HAA_Import_Sets/js/detail_import_datas.js"></script>	
        <div id="HAA_Import_Datas_detailview_tabs" class="yui-navset detailview_tabs yui-navset-top">
            <ul class="yui-nav">
                <li id="litab1" title="active" class="selected">
                    <a id="tab1" href="javascript:void(0)" onclick="tabChange(1)"><em>全部内容</em></a>
                </li>
                <li id="litab2" title="">
                    <a id="tab2" href="javascript:void(0)" onclick="tabChange(2)"><em>错误数据</em></a>
                </li>
                <li id="litab3" title="">
                    <a id="tab3" href="javascript:void(0)" onclick="tabChange(3)"><em>警告数据</em></a>
                </li>
            </ul>
            <div class="yui-content">
                <div id="tabcontent1">
                    <div id="detailpanel_1" class="detail view  detail508 expanded">
                        <table id="LBL_IMPORT_DATAS1" class="panelContainer" cellspacing="0">
                            <thead id="tab_thead1"></thead>
                            '.$this->displayPagingHtml(1).'
                            <tbody id="tab_tbody1"></tbody>
                            '.$this->displayPagingHtml(1).'
                        </table>
                    </div>
                </div>
                <div id="tabcontent2" class="yui-hidden">
                    <div id="detailpanel_2" class="detail view  detail508 expanded">
                    <!-- PANEL CONTAINER HERE.. -->
                    <table id="LBL_IMPORT_DATAS2" class="panelContainer" cellspacing="0">
                            <thead id="tab_thead2"></thead>
                            '.$this->displayPagingHtml(2).'
                            <tbody id="tab_tbody2"></tbody>
                            '.$this->displayPagingHtml(2).'
                    </table>
                    </div>
                </div>
                <div id="tabcontent3" class="yui-hidden">
                    <div id="detailpanel_3" class="detail view  detail508 expanded">
                    <!-- PANEL CONTAINER HERE.. -->
                    <table id="LBL_IMPORT_DATAS3" class="panelContainer" cellspacing="0">
                            <thead id="tab_thead3"></thead>
                            '.$this->displayPagingHtml(3).'
                            <tbody id="tab_tbody3"></tbody>
                            '.$this->displayPagingHtml(3).'
                    </table>
                    </div>
                </div>
            </div>
        </div>
        ';
        if($this->bean->document_id_c){
            echo '<script>var datas ='. getImportDatas($this->bean->document_id_c) .';</script>';
            echo '<script>setTabHead(1);setTabHead(2);setTabHead(3);</script>';
        }else{
            echo '<script>hidePageHtml();</script>';
        }
    }

    function displayPagingHtml($n){
        $html = "<tr  class='pagination' role='presentation'>"
                .'  <td class="paging" colspan="1" align="right">';
        $html .='                   <button type="button" title="首页" class="s_button'.$n.'" disabled="">'
            .'                          <img src="themes/SuiteR_HANDALM/images/start_off.gif?v=6T2wqZkzRRtQXSbbOJRC2A" alt="首页" border="0" align="absmiddle">'
            .'                      </button>'
            .'                      <button type="button" title="上页" class="p_button'.$n.'" disabled="">'
            .'                          <img src="themes/SuiteR_HANDALM/images/previous_off.gif?v=6T2wqZkzRRtQXSbbOJRC2A" alt="上页" border="0" align="absmiddle">'
            .'                      </button>'
            .'                      <span class="pageNumbers'.$n.'"></span>'  
            .'                      <button type="button" title="下页" class="n_button'.$n.'" disabled="">'
            .'                          <img src="themes/SuiteR_HANDALM/images/next_off.gif?v=6T2wqZkzRRtQXSbbOJRC2A" alt="下页" border="0" align="absmiddle">'
            .'                      </button>'
            .'                      <button type="button" title="末页" class="e_button'.$n.'" disabled="">'
            .'                          <img src="themes/SuiteR_HANDALM/images/end_off.gif?v=6T2wqZkzRRtQXSbbOJRC2A" alt="末页" border="0" align="absmiddle">'
            .'                      </button>';
        $html.='</td></tr>';   
        return $html;    
    }

    /*function getImportDatas($doc_id){
        global $db;
        $datas=array();
        $titles=array();
        $sql="select * from haa_import_datas hid where hid.document_id_c='".$doc_id."' ORDER BY hid.line_number";
        $result = $db->query($sql);
             //echo $sql;
        $cv_n=0;
        while ($row = $db->fetchByAssoc($result)) {
            $row_datas=array();
            $row_datas['line_number']=$row['line_number'];

            if($row['line_number']==0){
                $i=1;
                while($row['column_value'.$i]){
                    $row_datas['column_value'.$i]=$row['column_value'.$i];
                    $i++;
                }
                $cv_n = $cv_n>=$i-1?$cv_n:$i-1;
                $titles = $row_datas;
            }else{
                for($i=1;$i<=$cv_n;$i++){
                    $row_datas['column_value'.$i]=$row['column_value'.$i];
                }
                $row_datas['import_status']=$row['import_status'];
            $row_datas['error_message']=$row['error_message'];
            $row_datas['warning_message']=$row['warning_message'];
            $datas[]=$row_datas;
            }
            
        }
           // var_dump($datas);
        echo '<script>var titles = '.json_encode($titles).'; var import_datas = '.json_encode($datas).'; var cv_n = '.$cv_n.';</script>';
    }*/
}
?>
