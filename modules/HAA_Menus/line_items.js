var prodln=0;
var columnNum=12;
if(typeof sqs_objects=='undefined'){var sqs_objects=new Array;}
function insertLineHeader(tableid){
	$("#line_items_label").remove();
	tablehead=document.createElement("thead");
	tablehead.id=tableid+"_head";
	document.getElementById(tableid).appendChild(tablehead);
	var x=tablehead.insertRow(-1);
	x.id='Line_head';
	var a=x.insertCell(0);
	a.width="12%";
	a.innerHTML=SUGAR.language.get('HAA_Menus_Lists','LBL_SORT_ORDER');
	var f=x.insertCell(1);
	f.width="16%";
	f.innerHTML=SUGAR.language.get('HAA_Menus_Lists','LBL_FIELD_LABLE_ZHS');
	var b=x.insertCell(2);
	b.width="14%";
	b.align='center';
	b.innerHTML=SUGAR.language.get('HAA_Menus_Lists','LBL_FUNC_MODULE');
	var b1=x.insertCell(3);
	b1.width="14%";
	b1.align='center';
	b1.innerHTML=SUGAR.language.get('HAA_Menus_Lists','LBL_FUNCTION_NAME');
	var d=x.insertCell(4);
	d.width="12%";
	d.align='center';
	d.innerHTML=SUGAR.language.get('HAA_Menus_Lists','LBL_FUNC_ICON');
	var e=x.insertCell(5);
	e.width="12%";
	e.align='center';
	e.innerHTML=SUGAR.language.get('HAA_Menus_Lists','LBL_ENABLED_FLAG');
	var g=x.insertCell(6);
	g.width="15%";
	g.innerHTML=SUGAR.language.get('HAA_Menus_Lists','LBL_DESCRIPTION');
	var l=x.insertCell(7);
	l.width="8%";
	l.innerHTML='&nbsp;';
}

function insertLineData(line_data){//将数据写入到对应的行字段中
	var ln=0;
	if(line_data.id!='0'&&line_data.id!==''){
		ln=insertLineElements("lineItems");
		$("#line_sort_order".concat(String(ln))).val(line_data.sort_order);
		$("#line_id".concat(String(ln))).val(line_data.id);
		$("#line_field_lable_zhs".concat(String(ln))).val(line_data.field_lable_zhs);
		$("#line_func_module".concat(String(ln))).val(line_data.func_module);
		$("#line_function_name".concat(String(ln))).val(line_data.function_name);//
		$("#line_function_id".concat(String(ln))).val(line_data.function_id);
		$("#line_func_icon".concat(String(ln))).val(line_data.func_icon);
		$("#line_enabled_flag".concat(String(ln))).attr("checked",line_data.enabled_flag==1?true:false);
		$("#displayed_enabled_flag".concat(String(ln))).html(line_data.enabled_flag==1?"是":"否");
		$("#line_description".concat(String(ln))).html(line_data.description);
		renderLine(ln);
		$("#line_editor"+ln).hide();
	}
}

function insertLineElements(tableid){
	if(document.getElementById(tableid+'_head')!==null){
		document.getElementById(tableid+'_head').style.display="";
	}
	var modulelist=$("#hiddenlist").val();
	tablebody=document.createElement("tbody");
	tablebody.id="line_body"+prodln;
	document.getElementById(tableid).appendChild(tablebody);
	var z1=tablebody.insertRow(-1);
	z1.id='line1_displayed'+prodln;
	z1.className='oddListRowS1';
	z1.innerHTML="<td id='displayed_sort_order"+prodln+"'></td>"+
	"<td id='displayed_field_lable_zhs"+prodln+"'></td>"+
	"<td id='displayed_func_module"+prodln+"'></td>"+
	"<td id='displayed_function_name"+prodln+"'></td>"+
	"<td id='displayed_func_icon"+prodln+"'></td>"+
	"<td id='displayed_enabled_flag"+prodln+"'></td>"+
	"<td id='displayed_description"+prodln+"'></td>"+
	"<td><input type='button'value='"+SUGAR.language.get('app_strings','LBL_EDITINLINE')+"'class='button'id='btn_edit_line"+prodln+"'onclick='LineEditorShow("+prodln+")'></td>";
	var x=tablebody.insertRow(-1);//以下生成的是LineEditor
	x.id='line_editor'+prodln;
	x.innerHTML="<td colSpan='"+columnNum+"'>"+
	'<link rel="stylesheet" href="custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css"/>'+
	'<link rel="stylesheet" href="custom/resources/bootstrap-iconpicker/icon-fonts/icomoon/css/style.css"/>'+
	"<table border='0' class='lineEditor' width='100%'>"+
	"<tr>"+
		"<td>"+SUGAR.language.get('HAA_Menus_Lists','LBL_SORT_ORDER')+":<span class='required'>*</span></td>"+
		"<td><input name='line_sort_order["+prodln+"]'id='line_sort_order"+prodln+"' type='text' tabindex='0' class='sqsEnabled yui-ac-input' autocomplete='off' maxlength='255' size='24' value=''/>"+
		"</td>"+
		"<td>"+SUGAR.language.get('HAA_Menus_Lists','LBL_FIELD_LABLE_ZHS')+"</td>"+
		"<td><input type='text' id='line_field_lable_zhs"+prodln+"' name='line_field_lable_zhs["+prodln+"]' value=''/>"+
		"</td>"+
	"</tr>"+
	"<tr>"+
		"<td>"+SUGAR.language.get('HAA_Menus_Lists','LBL_FUNC_MODULE')+"</td>"+
		"<td><select type='text' name='line_func_module["+prodln+"]' id='line_func_module"+prodln+"'>"+modulelist+"</select></td>"+
		"<td>"+SUGAR.language.get('HAA_Menus_Lists','LBL_FUNCTION_NAME')+"</td>"+
		"<td><input type='text' id='line_function_name"+prodln+"' name='line_function_name["+prodln+"]' value='' maxlength='255' size='30'/>"+
		"<input type='hidden' id='line_function_id"+prodln+"' name='line_function_id["+prodln+"]' value='' maxlength='255' size='30'/>"+
		"<button title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' tabindex='116' class='button' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' name='btn1' onclick='openFuncPopup(" + prodln + ");'><img src='themes/default/images/id-ff-select.png' alt='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "'></button>"+
 		"<button type='button' name='btn_clr_locname' id='btn_clr_locname' tabindex='0' title='清除选择' class='button lastChild' onclick='setlocval(this.form, \"line_function_name\", \"line_function_id\","+prodln+");' value='清除选择'>"+
 		"<img src='themes/default/images/id-ff-clear.png'></button>"+
		"</td>"+
	"</tr>"+
	"<tr>"+
		"<td>"+SUGAR.language.get('HAA_Menus_Lists','LBL_ENABLED_FLAG')+":</td>"+
		"<td><input type='hidden' name='line_enabled_flag["+prodln+"]' value='0'/>"+
		"<input type='checkbox' id='line_enabled_flag"+prodln+"' name='line_enabled_flag["+prodln+"]' value='1'/></td>"+
		"<td>"+SUGAR.language.get('HAA_Menus_Lists','LBL_FUNC_ICON')+"</td>"+
		'<td><input type="hidden" id="line_func_icon'+prodln+'" name="line_func_icon['+prodln+']" value=""/>'+
		"</td>"+
	"</tr>"+
	"<tr>"+
		"<td>"+SUGAR.language.get('HAA_Menus_Lists','LBL_DESCRIPTION')+":</td>"+
		"<td><textarea id='line_description"+prodln+"' name='line_description["+prodln+"]' rows='2' cols='45'></textarea></td>"+
		"<td></td><td></td>"+
	"</tr>"+
	"<tr>"+
		"<td colSpan='2'>"+
			"<input type='hidden' id='line_id"+prodln+"' name='line_id["+prodln+"]' value=''/>"+
		"</td>"+
		"<td colSpan='2'><input type='hidden' id='line_deleted"+prodln+"' name='line_deleted["+prodln+"]' value='0'>"+
						"<input type='button' id='line_delete_line"+prodln+"' class='button btn_del' value='"+SUGAR.language.get('app_strings','LBL_DELETE_INLINE')+"' tabindex='116' onclick='btnMarkLineDeleted("+prodln+",\"line_\")'>"+
						"<button type='button' id='btn_LineEditorClose"+prodln+"' class='button btn_save' value='"+SUGAR.language.get('app_strings','LBL_CLOSEINLINE')+"' tabindex='116' onclick='LineEditorClose("+prodln+",\"line_\")'>"+SUGAR.language.get('app_strings','LBL_SAVE_BUTTON_LABEL')+"&"+SUGAR.language.get('app_strings','LBL_CLOSEINLINE')+"<img src='themes/default/images/id-ff-clear.png' alt='"+SUGAR.language.get(module_sugar_grp1,'LBL_REMOVE_PRODUCT_LINE')+"'></button>"+
		"</td>"+
	"</tr>"+
	"</table></td>";
	icon_edit($("#line_func_icon"+prodln),prodln);
	checkValues(prodln);
	renderLine(prodln);
	prodln++;
	return prodln-1;
}

function checkValues(ln){
	addToValidate('EditView','line_sort_order'+ln,'varchar','true',SUGAR.language.get('HAA_Menus_Lists','LBL_SORT_ORDER'));
	addToValidate('EditView','line_field_Lable_zhs'+ln,'varchar','true',SUGAR.language.get('HAA_Menus_Lists','LBL_FIELD_LABLE_ZHS'));
	//addToValidate('EditView','line_field_Lable_zhs'+ln,'varchar','true',SUGAR.language.get('HAA_Menus_Lists','LBL_FIELD_LABLE_ZHS'));
	//addToValidateBinaryDependency('EditView', 'line_relate_insurance_number'+prodln, 'varchar', false,'没有匹配字段: 保险单号', 'line_haos_insurances_id_c'+prodln );
}

function renderLine(ln){//将编辑器中的内容显示于正常行中
	$("#displayed_sort_order"+ln).html($("#line_sort_order"+ln).val());
	$("#displayed_field_lable_zhs"+ln).html($("#line_field_lable_zhs"+ln).val());
	$("#displayed_func_module"+ln).html($("#line_func_module"+ln).find("option:selected").text());
	$("#displayed_function_name"+ln).html($("#line_function_name"+ln).val());
	$("#displayed_func_icon"+ln).html($("#line_func_icon"+ln).val());
	$("#displayed_enabled_flag"+ln).html($("#line_enabled_flag"+ln).is(":checked")?"是":"否");
	$("#displayed_description"+ln).html($("#line_description"+ln).val());
	$("#lineItems tr td").each(function(){
		$(this).css('vertical-align','middle');
	});
}

function openFuncPopup(ln){
	var popupRequestData = {
		"call_back_function" : "setFuncReturn",
		"form_name" : "EditView",
		"field_to_name_array" : {
			"id":"line_function_id"+ln,
			"name" : "line_function_name" + ln,
		}
	};
	var data="&function_module_advanced="+$("#line_func_module"+ln).val();
	open_popup('HAA_Functions', 800, 850, data, true, true, popupRequestData);
}

function setFuncReturn(popupReplyData){
	set_return(popupReplyData);
}

function insertLineFootor(tableid)
{
	tablefooter=document.createElement("tfoot");
	document.getElementById(tableid).appendChild(tablefooter);

	var footer_row=tablefooter.insertRow(-1);
	var footer_cell=footer_row.insertCell(0);

	footer_cell.scope="row";
	footer_cell.colSpan=columnNum;
	footer_cell.innerHTML="<input id='btnAddNewLine'type='button'class='buttonbtn_del'onclick='addNewLine(\""+tableid+"\")'value='+"+SUGAR.language.get('app_strings','LBL_ADD_BUTTON_TITLE')+"'/>";
}

function addNewLine(tableid){
	if(check_form('EditView')){//只有必须填写的字段都填写了才可以新增
		insertLineElements(tableid);//加入新行
		LineEditorShow(prodln-1);//打开行编辑器
	}
}

function btnMarkLineDeleted(ln,key){//删除当前行
	if(confirm(SUGAR.language.get('app_strings','NTC_DELETE_CONFIRMATION'))){
		markLineDeleted(ln,key);
		$("#line_editor"+ln).hide();
	}else{
		return false;
	}
}

function markLineDeleted(ln,key){//删除当前行

	document.getElementById(key+'editor'+ln).style.display='none';
	document.getElementById(key+'deleted'+ln).value='1';
	document.getElementById(key+'delete_line'+ln).onclick='';
	if(typeof validate!="undefined"&&typeof validate['EditView']!="undefined"){
		removeFromValidate('EditView','line_sort_order'+ln);
		removeFromValidate('EditView','line_field_Lable_zhs'+ln);
	}
	resetLineNum_Bold();
}

function LineEditorShow(ln){//显示行编辑器（先自动关闭所有的行编辑器，再打开当前行）
	if(!checkValidate('EditView','line_relate_insurance_number'+ln))
	addToValidate('EditView','line_relate_insurance_number'+ln,'varchar','true',SUGAR.language.get('HAA_Menus_Lists','LBL_RELATE_INSURANCE_NUMBER'));
	if(!checkValidate('EditView','line_claim_amount'+ln))
	addToValidate('EditView','line_claim_amount'+ln,'varchar','true',SUGAR.language.get('HAA_Menus_Lists','LBL_CLAIM_AMOUNT'));
	if(prodln>1){
		for(vari=0;i<prodln;i++){
			LineEditorClose(i);
		}
	}
	$("#line1_displayed"+ln).hide();
	$("#line_editor"+ln).show();
}

function LineEditorClose(ln){//关闭行编辑器（显示为正常行）
	if(check_form('EditView')){
		$("#line_editor"+ln).hide();
		$("#line1_displayed"+ln).show();
		renderLine(ln);
		resetLineNum_Bold();
	}
}

function resetLineNum_Bold(){//数行号
	var j=0;
	for(var i=0;i<prodln;i++){
		if($("#line_deleted"+i).val()!=1){//跳过已经删除的行（实际数据还没有删除，只是从界面隐藏）
			j=j+1;
			$("#displayed_line_num"+i).text(j);
		}
	}
}

function replace_display_lines(linesHtml,elementId) {
  var lineItems=document.getElementById(elementId);
  lineItems.innerHTML=linesHtml;
}

function setlocval(form,name,id,ln){
  SUGAR.clearRelateField(form,name+ln,id+ln);
}
$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/js/iconset/iconset-glyphicon.min.js");
$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/js/iconset/iconset-materialdesign-icomoon.js");

function icon_edit(icon_field_obj,ln) {
	icon_field_obj.hide();
	icon_field_obj.after('<button class="btn btn-default"  id="target_iconpicker'+ln+'" role="iconpicker"></button>');
	$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js",
	function () {
		$('#target_iconpicker'+ln).iconpicker();
		$('#target_iconpicker'+ln).iconpicker('setCols', 9);
		$('#target_iconpicker'+ln).iconpicker('setIconset', 'materialdesign');
		$('#target_iconpicker'+ln).iconpicker('setSearch', false);
		$('#target_iconpicker'+ln).iconpicker('setIcon', icon_field_obj.val());
		$("#asset_icon").hide();
	});
	$('#target_iconpicker'+ln).on('change', function(e) {
		icon_field_obj.val(e.icon);
	});
};


