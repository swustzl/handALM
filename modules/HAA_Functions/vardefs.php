<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$dictionary['HAA_Functions'] = array(
	'table'=>'haa_functions',
	'audited'=>true,
    'inline_edit'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
			'haa_frameworks_id_c' => 
		  	array (
			    'required' => false,
			    'name' => 'haa_frameworks_id_c',
			    'vname' => 'LBL_FRAMEWORKS_HAA_FRAMEWORKS_ID',
			    'type' => 'id',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => 0,
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => false,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => 36,
			    'size' => '20',
		  	),
			'frameworks' => 
			array (
			    'required' => false,
			    'source' => 'non-db',
			    'name' => 'frameworks',
			    'vname' => 'LBL_FRAMEWORKS',
			    'type' => 'relate',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => '0',
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => true,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => '255',
			    'size' => '20',
			    'id_name' => 'haa_frameworks_id_c',
			    'ext2' => 'HAA_Frameworks',
			    'module' => 'HAA_Frameworks',
			    'rname' => 'name',
			    'quicksearch' => 'enabled',
			    'studio' => 'visible',
			),
			'function_code' =>
			array(
				'required' => true,
			    'name' => 'function_code',
			    'vname' => 'LBL_FUNCTION_CODE',
			    'type' => 'varchar',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => 0,
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => false,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => '255',
			    'size' => '20',
			),
			'parameters' =>
			array(
				'required' => false,
			    'name' => 'parameters',
			    'vname' => 'LBL_PARAMETERS',
			    'type' => 'varchar',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => 0,
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => false,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => '255',
			    'size' => '20',
			),
			'haa_ff_id_c'=>
			array(
				'required' => false,
				'name' => 'haa_ff_id_c',
			    'vname' => 'LBL_HAA_FF_ID_C',
			    'type' => 'id',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => 0,
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => false,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => 36,
			    'size' => '20',
			),
			'haa_ff'=>
			array(
				'required' => false,
				'source' => 'non-db',
				'name' => 'haa_ff',
			    'vname' => 'LBL_HAA_FF',
			    'type' => 'relate',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => 0,
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => false,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => '255',
			    'size' => '20',
			    'id_name' => 'haa_ff_id_c',
			    'ext2' => 'HAA_FF',
			    'module' => 'HAA_FF',
			    'rname' => 'name',
			    'quicksearch' => 'enabled',
			    'studio' => 'visible',
			),
			'enabled_flag'=>
			 array(
			 	'required' => false,
			    'name' => 'enabled_flag',
			    'vname' => 'LBL_ENABLED_FLAG',
			    'type' => 'bool',
			    'massupdate' => 0,
			    'default' => '0',
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => '0',
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => true,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => '255',
			    'size' => '20',
			 ),
			 'func_icon' =>
			array(
				'required' => false,
			    'name' => 'func_icon',
			    'vname' => 'LBL_FUNC_ICON',
			    'type' => 'varchar',
			    'massupdate' => 0,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => '0',
			    'audited' => false,
			    'inline_edit' => false,
			    'reportable' => true,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			),
			'function_name_us' =>
			array(
				'required' => false,
			    'name' => 'function_name_us',
			    'vname' => 'LBL_FUNCTION_NAME_US',
			    'type' => 'varchar',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => 0,
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => false,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => '255',
			    'size' => '20',
			),
			'function_type' =>
			array(
				'required' => true,
			    'name' => 'function_type',
			    'vname' => 'LBL_FUNCTION_TYPE',
			    'type' => 'enum',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => 0,
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => false,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => '255',
			    'size' => '20',
			    'options' => 'haa_function_type',
            	'studio' => 'visible',
            	'dependency' => false,
			),
			'func_module' =>
			array(
				'required' => true,
			    'name' => 'func_module',
			    'vname' => 'LBL_FUNCTION_MODULE',
			    'type' => 'enum',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => 0,
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => false,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => '255',
			    'size' => '20',
			    'options' => 'moduleList',
            	'studio' => 'visible',
            	'dependency' => false,
			),
			'line_items' =>
			array(
				'required' => false,
			    'source' => 'non-db',
			    'name' => 'line_items',
			    'vname' => 'LBL_LINE_ITEMS',
			    'type' => 'relate',
			    'massupdate' => 0,
			    'no_default' => false,
			    'comments' => '',
			    'help' => '',
			    'importable' => 'true',
			    'duplicate_merge' => 'disabled',
			    'duplicate_merge_dom_value' => '0',
			    'audited' => false,
			    'inline_edit' => true,
			    'reportable' => true,
			    'unified_search' => false,
			    'merge_filter' => 'disabled',
			    'len' => '255',
			    'size' => '20',
			),
		),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HAA_Functions','HAA_Functions', array('basic','assignable','security_groups'));
