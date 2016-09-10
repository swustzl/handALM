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

$dictionary['HAT_EventType'] = array(
	'table'=>'hat_eventtype',
	'audited'=>true,
    'inline_edit'=>true,
    'duplicate_merge'=>true,
    'fields'=>array (
      'basic_type' => 
      array (
        'required' => true,
        'name' => 'basic_type',
        'vname' => 'LBL_BASIC_TYPE',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'AT_MOVE',
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'false',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => '',
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => 100,
        'size' => '20',
        'options' => 'hat_event_type_list',
        'studio' => 'visible',
        'dependency' => false,
        ),

      'parent_eventtype_id' =>
      array (
        'inline_edit' => 1,
        'required' => false,
        'name' => 'parent_eventtype_id',
        'vname' => 'LBL_PARENT_EVENTTYPE_ID',
        'type' => 'id',
        'massupdate' => '0',
        'default' => NULL,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'reportable' => false,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '36',
        'size' => '20',
        'id' => 'parent_eventtype_id',
        ),
      'parent_eventtype' =>
      array (
        'inline_edit' => '',
        'required' => false,
        'source' => 'non-db',
        'name' => 'parent_eventtype',
        'vname' => 'LBL_PARENT_EVENTTYPE',
        'type' => 'relate',
        'massupdate' => '0',
        'default' => NULL,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
        'id_name' => 'parent_eventtype_id',
        'ext2' => 'HAT_EventType',
        'module' => 'HAT_EventType',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),

      'haa_ff_id' =>
      array (
        'inline_edit' => 1,
        'required' => false,
        'name' => 'haa_ff_id',
        'vname' => 'LBL_HAA_FF_ID',
        'type' => 'id',
        'massupdate' => '0',
        'default' => NULL,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'reportable' => false,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '36',
        'size' => '20',
        'id' => 'code_asset_location_type_id',
        ),
      'haa_ff' =>
      array (
        'inline_edit' => '',
        'required' => false,
        'source' => 'non-db',
        'name' => 'haa_ff',
        'vname' => 'LBL_HAA_FF',
        'type' => 'relate',
        'massupdate' => '0',
        'default' => NULL,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
        'id_name' => 'haa_ff_id',
        'ext2' => 'HAA_FF',
        'module' => 'HAA_FF',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'target_asset_status' => 
      array (
        'required' => true,
        'name' => 'target_asset_status',
        'vname' => 'LBL_TARGET_ASSET_STATUS',
        'type' => 'enum',
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
        'len' => 100,
        'size' => '20',
        'options' => 'asset_status_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_parent' => 
      array (
        'required' => true,
        'name' => 'change_parent',
        'vname' => 'LBL_CHANGE_PARENT',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'OPTIONAL',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_location' => 
      array (
        'required' => true,
        'name' => 'change_location',
        'vname' => 'LBL_CHANGE_LOCATION',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'OPTIONAL',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'processing_asset_status' => 
      array (
        'required' => true,
        'name' => 'processing_asset_status',
        'vname' => 'LBL_PROCESSING_ASSET_STATUS',
        'type' => 'enum',
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
        'len' => 100,
        'size' => '20',
        'options' => 'asset_status_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_rack_position' => 
      array (
        'required' => true,
        'name' => 'change_rack_position',
        'vname' => 'LBL_CHANGE_RACK_POSITION',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'OPTIONAL',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_owning_org' => 
      array (
        'required' => true,
        'name' => 'change_owning_org',
        'vname' => 'LBL_CHANGE_OWNING_ORG',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'OPTIONAL',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_owning_person' => 
      array (
        'required' => true,
        'name' => 'change_owning_person',
        'vname' => 'LBL_CHANGE_OWNING_PERSON',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'OPTIONAL',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_using_org' => 
      array (
        'required' => true,
        'name' => 'change_using_org',
        'vname' => 'LBL_CHANGE_USING_ORG',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'OPTIONAL',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_using_person' => 
      array (
        'required' => true,
        'name' => 'change_using_person',
        'vname' => 'LBL_CHANGE_USING_PERSON',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'OPTIONAL',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_oranization_le' => 
      array (
        'required' => true,
        'name' => 'change_oranization_le',
        'vname' => 'LBL_CHANGE_ORANIZATION_LE',
        'type' => 'enum',
        'massupdate' => '1',
        'default' => 'OPTIONAL',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_location_desc' => 
      array (
        'required' => true,
        'name' => 'change_location_desc',
        'vname' => 'LBL_CHANGE_LOCATION_DESC',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'OPTIONAL',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'require_approval_workflow' => 
      array (
        'required' => true,
        'name' => 'require_approval_workflow',
        'vname' => 'LBL_REQUIRE_APPROVAL_WORKFLOW',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'LOCKED',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'require_confirmation' => 
      array (
        'required' => true,
        'name' => 'require_confirmation',
        'vname' => 'LBL_REQUIRE_CONFIRMATION',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => 'LOCKED',
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
        'len' => 100,
        'size' => '20',
        'options' => 'cux_event_type_option_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'change_target_status' => 
      array (
        'required' => false,
        'name' => 'change_target_status',
        'vname' => 'LBL_CHANGE_TARGET_STATUS',
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
	//'options' => 'dom_int_bool',
        ),
      'change_processing_status' => 
      array (
        'required' => false,
        'name' => 'change_processing_status',
        'vname' => 'LBL_CHANGE_PROCESSING_STATUS',
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
    //'options' => 'dom_int_bool',
        ),
      'concat_name' => 
      array (
        'required' => false,
        'name' => 'concat_name',
        'vname' => 'LBL_CONCAT_NAME',
        'type' => 'varchar',
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
        'len' => '140',
        'size' => '20',
        ),
      'event_short_desc' => 
      array (
        'required' => true,
        'name' => 'event_short_desc',
        'vname' => 'LBL_EVENT_SHORT_DESC',
        'type' => 'varchar',
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
        'len' => '140',
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
VardefManager::createVardef('HAT_EventType','HAT_EventType', array('basic','assignable','security_groups'));