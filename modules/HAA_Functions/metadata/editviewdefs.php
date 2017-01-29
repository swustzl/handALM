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

$module_name = 'HAA_Functions';
$viewdefs[$module_name]=
  array(
    'EditView' => 
    array(
      'templateMeta' =>
      array(
        'maxColumns' => '2',
        'widths' =>
          array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
        'useTabs' => false,
        'tabDefs' =>
        array(
          'DEFAULT' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL1' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'panels' =>
      array(
        'default' =>array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'function_code',
              'label' => 'LBL_FUNCTION_CODE',
              'studio' => 'visible',
            ),
            1 => 'name',
          ),
          1 =>
          array(
            0 =>
            array(
              'name' => 'function_type',
              'label' => 'LBL_FUNCTION_TYPE',
              'studio' => 'visible',
            ),
            1 =>
            array(
              'name' => 'func_module',
              'label' => 'LBL_FUNC_MODULE',
              'studio' => 'visible',
            ),
          ),
          2 => 
          array(
            0=>
            array(
              'name' => 'frameworks',
              'label' => 'LBL_FRAMEWORKS',
              'studio' => 'visible',
            ),
            1 => 
            array(
              'name' => 'haa_ff',
              'label' => 'LBL_HAA_FF',
              'studio' => 'visible',
            ),
          ),
          3 => 
          array(
            0=>
            array(
              'name' => 'parameters',
              'label' => 'LBL_PARAMETERS',
              'studio' => 'visible',
            ),
            1 => 
            array(
              'name' => 'func_icon',
              'label' => 'LBL_FUNC_ICON',
              'studio' => 'visible',
            ),
          ),
        ),
      ),
    ),
  );
?>