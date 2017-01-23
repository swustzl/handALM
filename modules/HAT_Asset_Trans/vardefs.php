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

$dictionary['HAT_Asset_Trans'] = array(
	'table'=>'hat_asset_trans',
	'audited'=>true,
	'inline_edit'=>true,
	'duplicate_merge'=>true,
	'fields'=>array (
		'batch_id' => 
		array (
			'required' => false,
			'name' => 'batch_id',
			'vname' => 'LBL_BATCH_ID',
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
		'header' => 
		array (
			'required' => false,
			'name' => 'header',
			'vname' => 'LBL_HEADER',
			'type' => 'varchar',
			'source' => 'non-db',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			),
		'action_desc' => 
		array (
			'required' => false,
			'name' => 'action_desc',
			'vname' => 'LBL_ACTION_DESC',
			'type' => 'text',
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
		'asset_id' => 
		array (
			'required' => false,
			'name' => 'asset_id',
			'vname' => 'LBL_ASSET_ID',
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
		'asset' => 
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'asset',
			'vname' => 'LBL_ASSET',
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
			'id_name' => 'asset_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'target_parent_asset_id' => 
		array (
			'required' => false,
			'name' => 'target_parent_asset_id',
			'vname' => 'LBL_PARENT_ASSET_ID',
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
		'target_parent_asset' => 
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'target_parent_asset',
			'vname' => 'LBL_TARGET_PARENT_ASSET',
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
			'id_name' => 'target_parent_asset_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'planned_execution_date' => 
		array (
			'required' => true,
			'name' => 'planned_execution_date',
			'vname' => 'LBL_PLANNED_EXECUTION_DATE',
			'type' => 'datetimecombo',
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
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			),
		'planned_complete_date' => 
		array (
			'required' => true,
			'name' => 'planned_complete_date',
			'vname' => 'LBL_PLANNED_COMPLETE_DATE',
			'type' => 'datetimecombo',
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
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			),
		'acctual_complete_date' => 
		array (
			'required' => false,
			'name' => 'acctual_complete_date',
			'vname' => 'LBL_ACCTUAL_COMPLETE_DATE',
			'type' => 'datetimecombo',
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
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			),
		'current_asset_status' => 
		array (
			'required' => false,
			'name' => 'current_asset_status',
			'vname' => 'LBL_CURRENT_ASSET_STATUS',
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
			'len' => '255',
			'size' => '20',
			),
		'current_parent_asset_id' => 
		array (
			'required' => false,
			'name' => 'current_parent_asset_id',
			'vname' => 'LBL_CURRENT_LOCATION',
			'type' => 'id',
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
		'current_parent_asset' => 
		array (
			'required' => false,
			'source'=>'non-db',
			'name' => 'current_parent_asset',
			'vname' => 'LBL_CURRENT_PARENT_ASSET',
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
			'id_name' => 'current_parent_asset_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			), 
		'current_location_id' => 
		array (
			'required' => false,
			'name' => 'current_location_id',
			'vname' => 'LBL_CURRENT_LOCATION',
			'type' => 'id',
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
		'current_location' => 
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'current_location',
			'vname' => 'LBL_CURRENT_LOCATION',
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
			'id_name' => 'target_location_id',
			'ext2' => 'HAT_Asset_Locations',
			'module' => 'HAT_Asset_Locations',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'current_location_desc' => 
		array (
			'required' => false,
			'name' => 'current_location_desc',
			'vname' => 'LBL_CURRENT_LOCATION_DESC',
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
			'len' => '255',
			'size' => '20',
			),
		'current_using_org_id' =>
		array (
			'required' => false,
			'name' => 'current_using_org_id',
			'vname' => 'LBL_CURRENT_USING_ORG',
			'type' => 'id',
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
		'current_using_org' =>
		array (
			'required' => false,
			'name' => 'current_using_org',
			'source' => 'non-db',
			'vname' => 'LBL_CURRENT_USING_ORG',
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
			'id_name' => 'current_using_org_id',
			'ext2' => 'Accounts',
			'module' => 'Accounts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'current_using_person_id' =>
		array (
			'required' => false,
			'name' => 'current_using_person_id',
			'vname' => 'LBL_CURRENT_USING_PERSON',
			'type' => 'id',
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
		'current_using_person' =>
		array (
			'required' => false,
			'name' => 'current_using_person',
			'source' => 'non-db',
			'vname' => 'LBL_CURRENT_USING_PERSON',
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
			'id_name' => 'current_using_person_id',
			'ext2' => 'Contacts',
			'module' => 'Contacts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'current_owning_org_id' =>
		array (
			'required' => false,
			'name' => 'current_owning_org_id',
			'vname' => 'LBL_CURRENT_OWNING_ORG',
			'type' => 'id',
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
		'current_owning_org' => 
		array (
			'required' => false,
			'name' => 'current_owning_org',
			'source' => 'non-db',
			'vname' => 'LBL_CURRENT_OWNING_ORG',
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
			'id_name' => 'current_owning_org_id',
			'ext2' => 'Accounts',
			'module' => 'Accounts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'current_owning_person_id' => 
		array (
			'required' => false,
			'name' => 'current_owning_person_id',
			'vname' => 'LBL_CURRENT_OWNING_PERSON',
			'type' => 'id',
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
		'current_owning_person' => 
		array (
			'required' => false,
			'name' => 'current_owning_person',
			'source' => 'non-db',
			'vname' => 'LBL_CURRENT_OWNING_PERSON',
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
			'id_name' => 'current_owning_person_id',
			'ext2' => 'Contacts',
			'module' => 'Contacts',
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
			'options' => 'hat_asset_status_list',
			'studio' => 'visible',
			'dependency' => false,
			),
		'target_location_id' => 
		array (
			'required' => false,
			'name' => 'target_location_id',
			'vname' => 'LBL_TARGET_LOCATION_HAT_ASSET_LOCATIONS_ID',
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
		'target_location' => 
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'target_location',
			'vname' => 'LBL_TARGET_LOCATION',
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
			'id_name' => 'target_location_id',
			'ext2' => 'HAT_Asset_Locations',
			'module' => 'HAT_Asset_Locations',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'target_location_desc' => 
		array (
			'required' => false,
			'name' => 'target_location_desc',
			'vname' => 'LBL_TARGET_LOCATION_DESC',
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
			'len' => '255',
			'size' => '20',
			),
		'target_follow_location_gis' =>
		array (
			'required' => false,
			'name' => 'target_follow_location_gis',
			'vname' => 'LBL_TARGET_FOLLOW_LOCATION_GIS',
			'type' => 'bool',
			'massupdate' => 0,
			'default' => '1',
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
			),
		'target_rack_position_desc' => 
		array (
			'required' => false,
			'name' => 'target_rack_position_desc',
			'vname' => 'LBL_TARGET_RACK_DESC',
			'type' => 'text',
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
		'target_rack_position_data' =>
		array (
			'required' => false,
			'name' => 'target_rack_position_data',
			'vname' => 'LBL_TARGET_RACK_DESC',
			'type' => 'text',
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
			//'len' => 'max',
			//'size' => '20',
			),
		'target_gis_desc' =>
		array (
			'required' => false,
			'name' => 'target_gis_desc',
			'vname' => 'LBL_TARGET_GIS_DESC',
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
			'len' => '255',
			'size' => '20',
			),
		'target_owning_person_id' =>
		array (
			'required' => false,
			'name' => 'target_owning_person_id',
			'vname' => 'LBL_OWNING_PERSON_ID',
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
		'target_owning_person' =>
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'target_owning_person',
			'vname' => 'LBL_TARGET_OWNING_PERSON',
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
			'id_name' => 'target_owning_person_id',
			'ext2' => 'Contacts',
			'module' => 'Contacts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'target_using_person_id' =>
		array (
			'required' => false,
			'name' => 'target_using_person_id',
			'vname' => 'LBL_USING_PERSON_ID',
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
		'target_using_person' =>
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'target_using_person',
			'vname' => 'LBL_TARGET_USING_PERSON',
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
			'id_name' => 'target_using_person_id',
			'ext2' => 'Contacts',
			'module' => 'Contacts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'current_using_person_desc' => 
		array (
			'required' => false,
			'name' => 'current_using_person_desc',
			'vname' => 'LBL_CURRENT_USING_PERSON_DESC',
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
			'len' => '255',
			'size' => '20',
			),
		'current_owning_person_desc' => 
		array (
			'required' => false,
			'name' => 'current_owning_person_desc',
			'vname' => 'LBL_CURRENT_OWNING_PERSON_DESC',
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
			'len' => '255',
			'size' => '20',
			),
		'target_using_person_desc' => 
		array (
			'required' => false,
			'name' => 'target_using_person_desc',
			'vname' => 'LBL_TARGET_USING_PERSON_DESC',
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
			'len' => '255',
			'size' => '20',
			),
		'target_owning_person_desc' => 
		array (
			'required' => false,
			'name' => 'target_owning_person_desc',
			'vname' => 'LBL_TARGET_OWNING_PERSON_DESC',
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
			'len' => '255',
			'size' => '20',
			),
		'planned_execution_date' => 
		array (
			'required' => false,
			'name' => 'planned_execution_date',
			'vname' => 'LBL_PLANNED_EXECUTION_DATE',
			'type' => 'datetimecombo',
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
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			),
		'trans_status' => 
		array (
			'required' => false,
			'name' => 'trans_status',
			'vname' => 'LBL_TRANS_STATUS',
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
			'options' => 'asset_trans_status',
			'studio' => 'visible',
			'dependency' => false,
			),
		'target_owning_org_id' => 
		array (
			'required' => false,
			'name' => 'target_owning_org_id',
			'vname' => 'LBL_TARGET_RESPONSIBLE_CENTER_ACCOUNT_ID',
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
		'target_owning_org' => 
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'target_owning_org',
			'vname' => 'LBL_TARGET_RESPONSIBLE_CENTER',
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
			'id_name' => 'owning_org_id',
			'ext2' => 'Accounts',
			'module' => 'Accounts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'target_using_org_id' => 
		array (
			'required' => false,
			'name' => 'target_using_org_id',
			'vname' => 'LBL_USING_ORG_ID',
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
		'target_using_org' => 
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'target_using_org',
			'vname' => 'LBL_TARGET_USING_ORG',
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
			'id_name' => 'using_org_id',
			'ext2' => 'Accounts',
			'module' => 'Accounts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
'inactive_using' =>
		array (
			'required' => false,
			'name' => 'inactive_using',
			'vname' => 'LBL_INACTIVE_USING',
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
			),
'date_start' => array (
			'required' => false,
			'name' => 'date_start',
			'vname' => 'LBL_DATE_START',
			'type' => 'date',
			'massupdate' => 0,
			'no_default' => true,
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
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			//'display_default' => 'now&12:00am',
		),

	'date_end' => array (
			'required' => false,
			'name' => 'date_end',
			'vname' => 'LBL_DATE_END',
			'type' => 'date',
			'massupdate' => 0,
			'no_default' => true,
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
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			//'display_default' => 'now&12:00am',
		),
	'status' =>
        array (
            'required' => false,
            'name' => 'status',
            'vname' => 'LBL_STATUS',
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
            'options' => 'haa_code_type_list',
            'studio' => 'visible',
            'dependency' => false,
            ),
		'current_cost_center_id' =>
		array (
			'required' => false,
			'name' => 'current_cost_center_id',
			'vname' => 'LBL_CURRENT_COST_CENTER_ID',
			'type' => 'id',
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
		'current_cost_center' => 
		array (
			'required' => false,
			'name' => 'current_cost_center',
			'source' => 'non-db',
			'vname' => 'LBL_CURRNET_COST_CENTER',
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
			'id_name' => 'current_cost_center_id',
			'ext2' => 'HAA_Codes',
			'module' => 'HAA_Codes',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'target_cost_center_id' =>
		array (
			'required' => false,
			'name' => 'target_cost_center_id',
			'vname' => 'LBL_TARGET_COST_CENTER_ID',
			'type' => 'id',
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
		'target_cost_center' => 
		array (
			'required' => false,
			'name' => 'target_cost_center',
			'source' => 'non-db',
			'vname' => 'LBL_TARGET_COST_CENTER',
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
			'id_name' => 'target_cost_center_id',
			'ext2' => 'HAA_Codes',
			'module' => 'HAA_Codes',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'current_asset_attribute10' =>
		array (
			'required' => false,
			'name' => 'current_asset_attribute10',
			'vname' => 'LBL_CURRENT_ASSET_ATTRIBUTE10',
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
			'len' => '255',
			'size' => '20',
			),
		'target_asset_attribute10' =>
		array (
			'required' => false,
			'name' => 'target_asset_attribute10',
			'vname' => 'LBL_TARGET_ASSET_ATTRIBUTE10',
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
			'len' => '255',
			'size' => '20',
			),
		'current_asset_attribute11' =>
		array (
			'required' => false,
			'name' => 'current_asset_attribute11',
			'vname' => 'LBL_CURRENT_ASSET_ATTRIBUTE11',
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
			'len' => '255',
			'size' => '20',
			),
		'target_asset_attribute11' =>
		array (
			'required' => false,
			'name' => 'target_asset_attribute11',
			'vname' => 'LBL_TARGET_ASSET_ATTRIBUTE11',
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
			'len' => '255',
			'size' => '20',
			),
		'current_asset_attribute12' =>
		array (
			'required' => false,
			'name' => 'current_asset_attribute12',
			'vname' => 'LBL_CURRENT_ASSET_ATTRIBUTE12',
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
			'len' => '255',
			'size' => '20',
			),
		'target_asset_attribute12' =>
		array (
			'required' => false,
			'name' => 'target_asset_attribute12',
			'vname' => 'LBL_TARGET_ASSET_ATTRIBUTE12',
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
			'len' => '255',
			'size' => '20',
			),
		),


'indices'=>array (
  array (
    'name' => 'hat_asset_transspk',
    'type' => 'primary',
    'fields' => 
    array (
      0 => 'id',
      ),
    ),
  array (
    'name' => 'idx_batch_id_del',
    'type' => 'index',
    'fields' => 
    array (
      0 => 'batch_id',
      1 => 'deleted',
      ),
    ),
    array (
    'name' => 'idx_asset_id_del',
    'type' => 'index',
    'fields' => 
    array (
      0 => 'asset_id',
      1 => 'deleted',
      ),
    ),
    array (
    'name' => 'idx_trans_status_del',
    'type' => 'index',
    'fields' => 
    array (
      0 => 'trans_status',
      1 => 'deleted',
      ),
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
VardefManager::createVardef('HAT_Asset_Trans','HAT_Asset_Trans', array('basic','assignable','security_groups'));