<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.list.php');

class HAM_WOViewList extends ViewList
{
  function Display() {
    global $app_list_strings;
	echo '<script src="cache/include/javascript/sugar_grp_yui_widgets.js"></script>';
	echo '<link rel="stylesheet" href="custom/resources/bootstrap3-dialog-master/dist/css/bootstrap-dialog.min.css" type="text/css" />';
    $this->ss->assign('APP_LIST', $app_list_strings);

	echo '<script src="modules/HAM_WO/js/HAM_WO_listview.js"></script>';


	if(isset($_GET['error_message'])&&!empty($_GET['error_message'])){
		echo '<script>var return_msg="'.$_GET['error_message'].'"</script>';
		//echo '<script>alert('.$_GET['error_message'].');</script>';
	}
    parent::Display();
  }

  function processSearchForm(){
    parent::processSearchForm();
    $haa_frameworks_id=$_SESSION["current_framework"];
    if ($this->where) { 
      $this->where.=" AND EXISTS (SELECT 1 FROM ham_maint_sites hms WHERE hms.id = ham_wo.ham_maint_sites_id AND hms.haa_frameworks_id ='".$haa_frameworks_id."')";
    }else{
      $this->where=" EXISTS (SELECT 1 FROM ham_maint_sites hms WHERE hms.id = ham_wo.ham_maint_sites_id AND hms.haa_frameworks_id ='".$haa_frameworks_id."')";
    }
    //增加HPR权限控制逻辑
    require_once('modules/HPR_Group_Priviliges/checkListACL.php');
    global $current_user;
    $current_module = $this->module;
    $current_user_id =$current_user->id;
    $paraArray=array();
    $paraArray[]=$current_user_id;
    $aclSQLList=getListViewSQLStatement($current_module,$current_user_id,$haa_frameworks_id,$paraArray);
    $this->where.=empty($this->where)?(empty($aclSQLList)?"":$aclSQLList):(empty($aclSQLList)?"":'  AND '.$aclSQLList);
   //var_dump($this->where);
    //End HPR权限控制逻辑
  }
}
