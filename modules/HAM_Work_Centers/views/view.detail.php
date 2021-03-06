<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class HAM_Work_CentersViewDetail extends ViewDetail
{

	function Display() {
        //1、初始化Framework
        require_once('modules/HAA_Frameworks/orgSelector_class.php');
        $current_framework_id = empty($this->bean->haa_frameworks_id)?"":$this->bean->haa_frameworks_id;
        $current_module = $this->module;
        $current_action = $this->action;

        $this->ss->assign('FRAMEWORK',set_framework_selector($current_framework_id,$current_module,$current_action,'haa_frameworks_id'));
		
		$this->bean->framework=set_framework_selector($current_framework_id,"HAM_Work_Centers","DetailView",'haa_frameworks_id');

                parent::Display();

    }

}//end class
