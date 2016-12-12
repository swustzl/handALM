// $.getScript("modules/HAA_FF/ff_include.js");//load triger_setFF()

/*
 * function call_ff() {
 * triger_setFF($("#haa_ff_id").val(),"HAT_Asset_Trans_Batch","DetailView");
 * $(".expandLink").click();
 *  }
 */
$.getScript("cache/include/javascript/sugar_grp_yui_widgets.js"); // MessageBox
$.getScript("custom/resources/IPSubnetCalculator/lib/ip-subnet-calculator.js");
$.getScript("custom/resources/bootstrap3-dialog-master/dist/js/bootstrap-dialog.min.js"); // MessageBox
 $('head').append('<link rel="stylesheet" href="custom/resources/bootstrap3-dialog-master/dist/css/bootstrap-dialog.min.css" type="text/css" />');
/**
 * 点击按钮 调用Ajax请求 保存
 * 
 * @param name
 */
 function save(id, status_code) {
 	$.ajax({
 		url : 'index.php?to_pdf=true&module=HAT_Asset_Trans_Batch&action=saveBean&id='
 		+ id + "&status_code=" + status_code,
 		success : function(data) {
 			window.location.href = "index.php?module=HAT_Asset_Trans_Batch&action=DetailView&record="
 			+ id;
 		},
		error : function() { // 失败
			alert('Error loading document');

		}
	});
 };

/**
 * 点击按钮 调用Ajax请求 获取list里面根据工单状态应该显示的value
 * 
 * @param name
 */
 function changeStatus(id) {

 	$.ajax({
 		url : 'index.php?to_pdf=true&module=HAT_Asset_Trans_Batch&action=getListFields&id='
 		+ id,
 		success : function(data) {
 			var title_txt = SUGAR.language.get('HAT_Asset_Trans_Batch',
 				'LBL_BTN_CHANGE_STATUS_BUTTON_LABEL');
 			var html = ""
 			html += title_txt;
 			html += data;
			// html+="<input type='button' class='btn_detailview' id='btn_save'
			// value='"+SUGAR.language.get('app_strings',
			// 'LBL_SAVE_BUTTON_LABEL')+"'>";
			YAHOO.SUGAR.MessageBox.show({
				msg : html,
				title : title_txt,
				type : 'confirm',
				fn : function(confirm) {
					if (confirm == 'yes') {
						console.log($("input[name='record']").val());
						save($("input[name='record']").val(),
							$("#asset_trans_status").val());
					}
				}
			});
		},
		error : function() { // 失败
			alert('Error loading document');
		}
	});
 	/* } */
 };

 
 function check_quantity(){
		var error_msg="";
		var formData=$("#EditView");
		var formData_str = formData.serialize();
		
		var json_obj={};
		$("input[id^='line_asset_id']").each(function(){
			var id_name=$(this).attr("id");
			var id_index = id_name.split("line_asset_id")[1];
			if($("#line_deleted"+id_index).val()=="0"){
				json_obj[id_name]=$(this).val();	
			}
		});

		var json_data ={};

		json_data['asset_trans_status']="SUBMITTED";
		json_data['record']=$("input[name=record]").val();
		json_data['source_wo_id']=$("#source_wo_id_val").val();
		json_data['source_woop_id']=$("#source_woop_id_val").val();
		json_data["line_asset_id"]=json_obj;
		$.ajax({
			type:"POST",
			url: "index.php?to_pdf=true&module=HAT_Asset_Trans_Batch&action=checkContractQuantity",
			data: json_data,
			success: function(msg){ 
				error_msg=msg;
				console.log("msg = "+msg);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
				 alert('Error loading document');
				 console.log(textStatus+errorThrown);
			},
			});
	return error_msg;
	
}


 $(document).ready(function() {
	/*
	 * //触发FF SUGAR.util.doWhen("typeof setFF == 'function'", function(){
	 * call_ff(); });
	 */
	 if (typeof hideButtonFlag != "undefined") {
	 	$(".action_buttons").hide();
	 }

	 $("#line_items_span").parent("td").prev("td").hide();

	 if (typeof $("#source_wo_id").attr("data-id-value") != "undefined") {
		// 如果来源于工作单则显示工作单对象行信息，否则直接隐藏行
		$("#wo_lines").append("<div id='wo_lines_display'></div>");
		showWOLines($("#source_wo_id").attr("data-id-value"));
	} else {
		$("#wo_lines").parent("tr").hide();
	}


	if ($("#asset_trans_status").val() == "DRAFT") {
		var btn = $("<input type='button' class='btn_detailview' id='btn_submit' value='"
			+ SUGAR.language.get('app_strings', 'LBL_SUBMIT_BUTTON_LABEL')
			+ "'>");

		// $("#asset_trans_status").parent().append(btn);
		//$("#edit_button").after(btn);
	}

	$("#btn_submit").click(function() {
		$("#btn_submit").hide('normal',
			updateStatus($("input[name='record']").val()));
	});

	var change_btn = $("<input type='button' class='btn_detailview' id='btn_change_status' value='"
		+ SUGAR.language.get('HAT_Asset_Trans_Batch',
			'LBL_BTN_CHANGE_STATUS_BUTTON_LABEL') + "'>");
	if ($("#asset_trans_status").val() != "DRAFT") {
/*=======
	if ($("#asset_trans_status").val() == "DRAFT") {
>>>>>>> 8cd2ae4945acb8cfd49cfeeb9cc475d381a7c271
*/		$("#edit_button").after(change_btn);
	}

	$("#btn_change_status").click(function() {
		var msg = check_quantity();
		if(msg!="S"){
			BootstrapDialog.alert({
					type : BootstrapDialog.TYPE_DANGER,
					title : SUGAR.language.get('app_strings',
							'LBL_EMAIL_ERROR_GENERAL_TITLE'),
					message : msg
				});
		}else{
			changeStatus($("input[name='record']").val());
		}
		
	});

});

 function showWOLines(wo_id) {
 	console.log('index.php?to_pdf=true&module=HAM_WO&action=getWOLiness&id='
 		+ wo_id);
 	$.ajax({
 		url : 'index.php?to_pdf=true&module=HAM_WO&action=getWOLiness&id='
 		+ wo_id,
 		success : function(data) {
 			$("#wo_lines_display").html(data);
 		},
				error : function() { // 失败
					alert('Error loading document');
				}
			});
 };

 function updateStatus(object_id) {
 	if (object_id) {
		// ajaxStatus.flashStatus(SUGAR.language.get('app_strings',
		// 'LBL_LOADING'),800);为什么Ajax不能正常的被调用@！？
		// alert("ajax called");
		$("#detail_header_action_menu")
		.after("<span id='btn_submit_ajax_msg'> <img src='themes/default/images/loading.gif'  alt='saving' /> "
			+ SUGAR.language.get('app_strings', 'LBL_SAVING')
			+ "...</span>");
		$.ajax({
			url : 'index.php?to_pdf=true&module=HAT_Asset_Trans_Batch&action=changeStatusToSubmit&id='
			+ object_id,
			success : function() {
				// ajaxStatus.hideStatus();
				$("#asset_trans_status")
				.parent()
				.append(" -> <img src='themes/default/images/yes.gif'  alt='saved' /> <span style='font-weight:bolder;color:green;'>"
					+ SUGAR.language.get('HAT_Asset_Trans_Batch',
						'LBL_SUBMITTED') + "</span>");
				$("#btn_submit_ajax_msg")
				.html(" <img src='themes/default/images/yes.gif'  alt='saved' /> "
					+ SUGAR.language
					.get('app_strings', 'LBL_SAVED'));
			}
		});
	}
}

function GenerateDoc() {
	if (typeof template_id == 'undefined' || template_id.length == 0) {
		alert(SUGAR.language.get('app_strings', 'LBL_NO_TEMPLATE'));
		// warning for no PDF template
	} else {
		var record_id = $("input[name*='record']").val();
		//Modefy by zeng 20161110
		var title_txt=SUGAR.language.get('HAT_Asset_Trans_Batch','LBL_PDF_TEMPLATES');

		var list=$("#pdftemplatehidden").val();
		var $html=$('<select id="pdf_template_list" class="pdf_template_list" name="pdf_template_list">'+
			list+'</select>');
		var html='<select id="pdf_template_list" class="pdf_template_list" name="pdf_template_list">'+
		list+'</select>';

		BootstrapDialog.confirm({
			title: title_txt,
			message:$html,
			 callback: function(result){
				if(result) {
					template_id=$('#pdf_template_list').val();
					window.location = "index.php?module=HAT_Asset_Trans_Batch&action=GenerateDoc&uid="
					+ record_id + "&templateID=" + template_id;
				}else{
                    //alert("Nope.");
                }
            }
        });
		//END Modefy zeng 20161110
		/**/
	}
}