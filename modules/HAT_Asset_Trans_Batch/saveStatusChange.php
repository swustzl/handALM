<?php

/*
 * Created on 2016-8-12
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

error_reporting(E_ALL);

if (!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');
if (!empty($_POST['assigned_user_id']) && ($focus->assigned_user_id != $_POST['assigned_user_id']) && ($_POST['assigned_user_id'] != $current_user->id)) {
    $check_notify = TRUE; //如果指定了负责人，并且与当前录入人不同，就通知对应的人员进行处理。
} else {
    $check_notify = FALSE;
}

$current_id = $_GET['id'];
$status_code = $_GET['status_code'];

echo('accutral_execution_date='.$_GET['accutral_execution_date']);

$beanHeader = BeanFactory :: getBean('HAT_Asset_Trans_Batch', $current_id);

if($beanHeader) { //如果可以正确的读到数据，就可以继续开始修改

	//修改头数据
	require_once('modules/HAT_Asset_Trans_Batch/saveTransHeader.php');
	$beanHeader->asset_trans_status = $status_code;//先初始化为表单上选中的状态
	$beanHeader->asset_trans_status = check_hearder_status($beanHeader);//再更新为函数判断后的状态
	$beanHeader->save();

	//修改行数据，必要时对行上的资产及连锁的内容进行更新。
	require_once('modules/HAT_Asset_Trans/SaveAssetTransLines.php');
	save_lines_status($beanHeader);

	//检查当前头是否可以关闭，如果所有行都已经处理完毕，则可以将头状态关闭
	//included in saveTransHeader.php
	checkHeaderClose($beanHeader);

}
?>