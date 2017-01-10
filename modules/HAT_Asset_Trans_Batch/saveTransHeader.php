<?php


//**************
//**** START: Save the header normally 写入头信息****
//**************//
function save_header($beanHeader, $check_notify) {

    if(!$beanHeader->ACLAccess('Save')){//确认访问权限
        ACLController::displayNoAccess(true);
        sugar_cleanup(true);
    }

    $GLOBALS['log']->debug("OK.Header is Saving...");

    $beanHeader = populateFromPost('', $beanHeader);//调用populateFromPost写入POST的数据
    $beanHeader->asset_trans_status =  check_hearder_status($beanHeader);

    $beanHeader->save($check_notify);
    $return_id = $beanHeader->id;
    $GLOBALS['log']->debug("OK.Saved HAT_Asset_Trans_Batch record with id of ".$return_id);
    echo("OK.Saved HAT_Asset_Trans_Batch record with id of ".$return_id);


    if (isset($_REQUEST['duplicateSave']) && $_REQUEST['duplicateSave'] === "true"){
        $base_header_id = $_REQUEST['relate_id'];//复制一个记录
    }
    else{
        $base_header_id = $beanHeader->id;
    }
    return $beanHeader;
}


function check_hearder_status($beanHeader) {
	echo "status = ".$beanHeader->asset_trans_status."<br>";
    $returnStatus="DRAFT";
	//modified  by yuan.chen 2016-12-17
    if ($beanHeader->asset_trans_status == "SUBMITTED"||$beanHeader->asset_trans_status == "APPROVED") {
        $returnStatus = "APPROVED"; //目前是直接返回值，未来可以在此处加工作流信息
    } else {
        $returnStatus = $beanHeader->asset_trans_status;
    }

    //判断是否是需要2次确认，如果不需要2次确认则将状态变为结束。如果需要2次确认则不变，保持当前状态。
    if ($returnStatus == "APPROVED") {
        //检查EventType对应的值
        $beanEventType = BeanFactory::getBean('HAT_EventType', $beanHeader->hat_eventtype_id);
        if ($beanEventType && ($beanEventType->require_confirmation!='REQUIRED' && $beanEventType->require_confirmation!='OPTIONAL')) {
            //如果需要2步验证，则将当前APPROVED的状态自动变为TRANSACTED
            $returnStatus = "TRANSACTED";//表示将要处理
        }
        //否则就是APPROVED或是其它状态，这样的行将不处理资产事务
    }

    return $returnStatus;
}


///检查当前头是否可以关闭，如果所有行都已经处理完毕，则可以将头状态关闭
//included in saveTransHeader.php
function checkHeaderClose($beanHeader) {
    //目前在审批后立即就结束，但未来可以支持2步确认
    //因此代码在此预留

  global $timedate, $db;
    $sql="SELECT hat.id, hat.trans_status FROM hat_asset_trans hat WHERE hat.deleted=0 
            AND (hat.trans_status IS NULL OR (hat.trans_status !='CLOSED' AND hat.trans_status != 'AUTO_TRANSACTED'))
            AND hat.`batch_id`='".$beanHeader->id."'";

   $result=$db->query($sql);
   $count=$result->num_rows;

   if($count==0) {
        $beanHeader->asset_trans_status = "CLOSED";
        $beanHeader->save();//再调用一次，为了触发AfterSave,确认是否需要将头彻底关闭
    }
}

?>