<?php if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

//requests
//
//	current_mode =	view 标准的查看模式（默认）
//					----------------------------------------以下为进行PopupSelect模式
//					asset可以选择资产
//					rackposition 如果当前模式是选择U位，则出现U位选择的按钮
//					it 选择IT可联网设备
//					rack 选择机柜
//
//	mode = MultiSelect 表示进入了多选模式，否则为单选

?>

<link rel="stylesheet" src="custom/resources/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
<script src="custom/resources/zTree/js/jquery.ztree.core.min.js"></script>
<script src="custom/resources/zTree/js/jquery.ztree.excheck.js"></script>

<script src="modules/HAT_Asset_Locations/js/selector_resizer.js"></script>
<script src="modules/HAT_Asset_Locations/js/selector_treeview_racks.js"></script>
<script src="modules/HAT_Asset_Locations/js/selector_treeview.js"></script>
<script src="modules/HAT_Asset_Locations/js/selector_mapview.js"></script>
<script src="modules/HAA_FF/ff_include.js"></script>

<style type="text/css">
	#workbench_left {
		width:250px;
		height:600px;
		float:left;
		background-color:#efefef;
		overflow: scroll;
		display: block;
	}
	#node_details {
		padding: 20px;
		width: auto;
		overflow:auto;
	}

	#node_details h3 {
		padding: 10px 5px 15px 5px;
		font-size:medium;
		border-bottom: 1px solid #000;
		margin:0 0 20px 0;
	}
	#node_details p span,#node_details p span a {
		font-size: small;
	}

	#node_details .detailed_fields {
		float: left;
		width: 350px;
		padding:1px 1em 1px 0px;
	}
	#node_details span.lab {
		width:135px;
		margin: 0 1em 0 0;
		display: table-cell;
	}
	#node_details span.detail_data,#node_details span.detail_data a {
		/*width:170px;*/
		font-weight:bold;
		font-size: 1em;
		display: table-cell;
	}

	#node_details_footer {
		margin: 50px 0 0 0;
	}

	#node_details_footer a{
		margin:5px;
		padding: 2px 5px;
		font-size: small;
	}

	.field_span {
		padding: 0px;
	}
	.top_label,.top_filter_label {
		width:80px;
		display: inline-flex;
		text-align: right;
	}
	#selector_top_view {
		background-color:aliceblue;
		padding: 10px 5px;
		margin: -2px 0 0 0;
		border: 1px solid #ccc;
	}

	#selctor_top_view_details {
		border-right:1px dashed #ccc;
	}

	#select_mode .tab_label {
		margin: 0 1em 0 0;
		vertical-align:middle;
		font-size: medium;
	}
	#select_mode .tabFocused, #select_mode .tabUnfocused {
		border-radius: 5px 5px 0 0;
		display: inline-flex;
		vertical-align:middle;
		padding: 10px 15px;
	}
	#select_mode .tabFocused {
		background-color:aliceblue;
		border: 1px solid #ccc;
		border-bottom: 0;
	}
	#select_mode .tabUnfocused {
		background-color:#efefef;
		border: 1px solid #ccc;
	}
	.input_group {
		display: inline-block;
		padding-right: 1em;
		padding-left: 1em;
	}
.treeview_location {
	font-weight: bolder;
	background-color: #F3EEDF;
	/*padding:1px 15px 2px 10px;*/
}
.treeview_asset {
	font-weight: bolder;
	background-color: #ffcfbf;
	/*padding:1px 15px 2px 10px;*/
}
.treeview_product {
	font-weight: bolder;
	background-color: #ffc7c7;
	/*padding:1px 15px 2px 10px;*/
}
.detail_action_panel {
	margin: 25px 0;
}
#MultiSelectDiv {
	float: right;
	padding:5px;
}
#MultiSelectCount {
    font-weight: bold;
    font-size: large;
    background-color: #c5efff;
    padding: 5px 12px;
    border-radius: 15px;
}
#MultiSelectDiv ul {
	padding: 20px;
    list-style-type: none;
    max-height: 400px;
    overflow-y: scroll;
}

</style>

<?php

	global $mod_strings, $app_strings, $app_list_strings;
   	require_once('modules/HAA_Frameworks/orgSelector_class.php');
    $current_framework_id = "";
    $current_module = $this->module;
    $current_action = $this->action;
    echo '<div "div_framework" style="display:none">'.set_framework_selector($current_framework_id,$current_module,$current_action,'haa_frameworks_id').'</div>';

    $beanFramework = BeanFactory::getBean('HAA_Frameworks', $_SESSION["current_framework"]);
    //加载Framework对应的一些显示规则
    echo "<script>";
    if(isset($beanFramework)) {
        echo "var location_display_rule='".$beanFramework->fetched_row['location_display_rule']."';";
        echo "var asset_display_rule='".$beanFramework->fetched_row['asset_display_rule']."';";
        //add by yuan.chen
    }
    echo "</script>";

    //显示标题
	if (isset($_REQUEST['current_mode'])){
		if ($_REQUEST['current_mode']=="asset") {
			echo "<h3>".translate('LBL_NAV_ASSET','HAT_Asset_Locations')."</h3>";
		}else if ($_REQUEST['current_mode']=="it") {
			echo "<h3>".translate('LBL_NAV_IT','HAT_Asset_Locations')."</h3>";
		}else if ($_REQUEST['current_mode']=="rack") {
			echo "<h3>".translate('LBL_NAV_RACK','HAT_Asset_Locations')."</h3>";
		}else if ($_REQUEST['current_mode']=="rackposition") {
			echo "<h3>".translate('LBL_NAV_RACKPOSITION','HAT_Asset_Locations')."</h3>";
		}

	}



	if (isset($_REQUEST['current_mode'])){//如果有值就是在选择模式,因此将current_mode传递到JS中
		echo '<script>var current_mode = "'.$_REQUEST['current_mode'].'"</script>';
		//引用标准的popup_helper用于返回值
    	echo ('<script type="text/javascript" src="include/javascript/popup_helper.js"></script>');
    	echo '<form id="popup_query_form" name="popup_query_form">';
		echo '<input type="hidden" name="module" value="HAT_Asset_Locations">';
 		echo '<input type="hidden" name="action" value="Popup">';
 		echo '<input type="hidden" name="site_id" id="site_id" value="'.$_REQUEST['site_id'].'">';

 		if (isset($_REQUEST['target_using_org'])) {
 			echo '<input type="hidden" id="target_using_org" name="target_using_org" value="'.$_REQUEST['target_using_org'].'">';
 			echo '<input type="hidden" id="target_using_org_id" name="target_using_org_id" value="'.$_REQUEST['target_using_org_id'].'">';
 		}else{
 			echo '<input type="hidden" id="target_using_org" name="target_using_org" value="">';
 			echo '<input type="hidden" id="target_using_org_id" name="target_using_org_id" value="">';
 		}

		if (isset($_REQUEST['mode'])&&$_REQUEST['mode']=='MultiSelect'){//如果有值就多选模式
 			echo '<input type="hidden" id="mode" name="mode" value="MultiSelect">';
    			//多选区
			echo '<div id="MultiSelectDiv" class="dropdown">
					<span id="MultiSelectCount">0</span><span> Object(s) has been selected.</span>
					<input class="button" type="button" id="MassUpdate_select_button" value="选择" onclick="send_back_selected(\'HAT_Assets\',document.popup_query_form,\'mass[]\',\'继续之前请选择。\');">
					<div id="MultiSelectList" class="dropdown-menu"></div>
				</div>';
			echo '<input type="hidden" name="select_entire_list" value="0">';
			echo '<input type="hidden" name="current_query_by_page" value="">';
		}

    	echo '<input type="hidden" name="request_data" >'; //所有的参数都存在在这里，参数会被自动填充
    	//注意这里有form暂时没有关闭，在下面继续加入字段后再关闭

    	echo '</form>';

	} else {
		echo '<script>var current_mode = "view";</script>';
	}



	//TODO：下面这个是有些多余的，需要考虑如何删除
	echo '<selcet id="hit_rack_pos_depth_list" style="display:none">';
	foreach ($app_list_strings['hit_rack_pos_depth_list'] as $key => $value) {
		echo '<option value="'.$key.'">'.$value.'</option>';
	}
	echo '</selcet>';




?>



<div id="selector_top">
<!--顶部的TAB标签-->
	<div id="select_mode">
		 <div id="selectorType_Tree" class="tabFocused">
	         <span class="tab_label"><i class="icon-sitemap"></i> <?php echo translate('LBL_NAV_MODE_TREE','HAT_Asset_Locations');?> </span>
		     <select id="selector_view_tree" class="form-horizontal">
		     <?php foreach ($app_list_strings['hat_navigator_tree_type_list'] as $key => $value) {
		     	echo '<option value="'.$key.'">'.$value.'</option>';
		     }?>
			</select>
			<input type="hidden" id="current_view">
			<button id="btn_switch_tree_view"><?php echo  translate('LBL_BTN_SWITCH_VIEW','HAT_Asset_Locations');?></button>
	    </div>
<!-- 		<div id="selectorType_Grid" class="tabUnfocused">
	        <span class="tab_label"><i class="icon-map-o"></i> <?php echo  translate('LBL_NAV_MODE_GIRD','HAT_Asset_Locations')?> </span>
			<button id="btn_switch_grid_view"><?php echo translate('LBL_BTN_SWITCH_VIEW','HAT_Asset_Locations');?></button>
	    </div> 
		<div id="selectorType_Map" class="tabUnfocused">
	         <span class="tab_label"><i class="icon-map-o"></i> <?php echo  translate('LBL_NAV_MODE_MAP','HAT_Asset_Locations')?> </span>
			<select id="selector_map_type" class="form-horizontal">
			     <?php foreach ($app_list_strings['cux_map_type_list'] as $key => $value) {
			     	echo '<option value="'.$key.'">'.$value.'</option>';
			     }?>
			</select>
			<button id="btn_switch_map_view"><?php echo translate('LBL_BTN_SWITCH_VIEW','HAT_Asset_Locations');?></button>
	    </div>-->


	</div>

<!--Search area-->
<form id="search_form" name="search_form" method="post">
	<div id="selector_top_view" class="row">
				<span class="input_group">  
					<label id="assetStatus_label">维护地点/区域</label>

<?php
		require_once('modules/HAA_Frameworks/orgSelector_class.php');
		$current_site_id = empty($_REQUEST['site_id'])?"":$_REQUEST['site_id'];
		echo set_site_selector($current_site_id,$current_module,$current_action);
?>
				</span>

				<span class="input_group">  
					<label id="assetStatus_label">资产状态</label>
					<select name="asset_status" id="asset_status" class="form-horizontal">
				     <?php foreach ($app_list_strings['hat_asset_status_list'] as $key => $value) {
				     	echo '<option value="'.$key.'">'.$value.'</option>';
				     }?>
					</select>
				</span>
				<span class="input_group">
					<label id="assetName_label">资产名称</label>
					<input name="asset_name" id="asset_name">
				</span>
				<span class="input_group">
					<label id="serial_number_label">S/N号</label>
					<input name="serial_number" id="serial_number">
				</span>
				<span class="input_group">
					<label id="owning_org_name_label">所属组织</label>
					<input name="owning_org_name" id="owning_org_name">
				</span>
				<span class="input_group">
					<label id="using_org_name_label">使用组织</label>
					<input name="using_org_name" id="using_org_name">
				</span>
		    <input type="button" id="btn_search" onclick="btn_search_clicked()" value="搜索">
	</div>
</form>


<div id="workbench" style="margin:0;display:flex;border:1px solid #ccc">
	<div id="workbench_left">
		<ul id="treeview_selector" class="overflow: scroll">
			a tree
		</ul>
		<div id="cuxMap"></div>
	</div>
	<div id="node_details" style="float:left;">
	</div>
</div>

<?php //加载语言包
        $modules = array(
            'HAT_Asset_Locations',
            'HAT_Assets','HIT_Rack_Allocations','HIT_Racks',
        );
        foreach ($modules as $module) {
            if (!is_file($GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js')) {
                require_once 'include/language/jsLanguage.php';
                jsLanguage::createModuleStringsCache($module, $GLOBALS['current_language']);
            }
            echo '<script type="text/javascript" src="' . $GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js?s=' . $GLOBALS['js_version_key'] . '&c=' . $GLOBALS['sugar_config']['js_custom_version'] . '&j=' . $GLOBALS['sugar_config']['js_lang_version'] . '"></script>';
        };
?>

<script>
/*	$.getScript("modules/HAT_Asset_Locations/js/selector_resizer.js"); //加载横竖两个可拖拉条
	$.getScript("modules/HAT_Asset_Locations/js/selector_treeview_racks.js");//加载结构树中机柜图部分的处理
	$.getScript("modules/HAT_Asset_Locations/js/selector_treeview.js");//加载结构树的处理
	$.getScript("modules/HAT_Asset_Locations/js/selector_mapview.js");//加载地图视图的处理
*/



$(document).ready(function(){

	$("#selectorType_Tree").click(function(){
		$("#selectorType_Tree").addClass("tabFocused");
		$("#selectorType_Tree").removeClass("tabUnfocused");
		$("#selectorType_Grid").addClass("tabUnfocused");
		$("#selectorType_Grid").removeClass("tabFocused");
		$("#selectorType_Map").addClass("tabUnfocused");
		$("#selectorType_Map").removeClass("tabFocused");
		$("#selector_map_type").hide();
		$("#selector_view_tree").show();
		$("#btn_switch_map_view").hide();
		$("#btn_switch_grid_view").hide();
		$("#btn_switch_tree_view").show();
	});

	$("#selectorType_Map").click(function(){
		$("#selectorType_Tree").addClass("tabUnfocused");
		$("#selectorType_Tree").removeClass("tabFocused");
		$("#selectorType_Grid").addClass("tabUnfocused");
		$("#selectorType_Grid").removeClass("tabFocused");
		$("#selectorType_Map").addClass("tabFocused");
		$("#selectorType_Map").removeClass("tabUnfocused");
		$("#selector_map_type").show();
		$("#selector_view_tree").hide();
		$("#btn_switch_map_view").show();
		$("#btn_switch_grid_view").hide();
		$("#btn_switch_tree_view").hide();
	});

	$("#selectorType_Grid").click(function(){
		$("#selectorType_Tree").addClass("tabUnfocused");
		$("#selectorType_Tree").removeClass("tabFocused");
		$("#selectorType_Grid").addClass("tabFocused");
		$("#selectorType_Grid").removeClass("tabUnfocused");
		$("#selectorType_Map").addClass("tabUnfocused");
		$("#selectorType_Map").removeClass("tabFocused");
		$("#selector_map_type").hide();
		$("#selector_view_tree").hide();
		$("#btn_switch_map_view").hide();
		$("#btn_switch_grid_view").show();
		$("#btn_switch_tree_view").hide();
	});

	$("#btn_switch_tree_view").click(function(){
		if($("#selectorType_Tree").hasClass('tabFocused')) {
			//如果当前模块是Treeview
			$("#current_view").val($("#selector_view_tree").val());//加载树的类型

			SUGAR.util.doWhen("typeof initTree == 'function'", function() {<?php
				//在selector_treeview.js完成加载之后，再继续加载
				//这里是需要执行的内容
				if (isset($_REQUEST['defualt_list']) && $_REQUEST['defualt_list']!="none") {
					//默认搜索模式
					if ($_REQUEST['defualt_list']=="wo_asset_trans" && isset($_REQUEST['wo_id'])) {
						echo 'initTree("LIST","'.$_REQUEST["defualt_list"].'","'.$_REQUEST["wo_id"].'");';
					} else if ($_REQUEST['defualt_list']=="rack" && isset($_REQUEST['asset_id'])) {
						echo 'initTree("LIST","'.$_REQUEST["defualt_list"].'","'.$_REQUEST["asset_id"].'");';
					} else if ($_REQUEST['defualt_list']=="current_using_org" && isset($_REQUEST['target_using_org_id'])) {
						echo 'initTree("LIST","current_using_org","'.$_REQUEST["target_using_org_id"].'");';
					} else if ($_REQUEST['defualt_list']=="current_using_org_none" && isset($_REQUEST['target_using_org_id'])) {
						echo 'initTree("LIST","current_using_org","'.$_REQUEST["target_using_org_id"].'");';
					} else{
						echo 'initTree("LIST","'.$_REQUEST["defualt_list"].'");';
					}
				 }else {
					//如果没有搜索参数，就默认树型结构初始化
					echo 'initTree($("#current_view").val());';
				}?>
			});//end util
		} else if($("#selectorType_Grid").hasClass('tabFocused')) {
			//Gird定位
		}
		else {
			//如果当前模式不是Treeview，就是MapView
		}

	})

	$("#selectorType_Tree").click();//默认是Functional Tree的View
	$("#btn_switch_tree_view").click();//默认是Functional Tree的模式

	$("#MultiSelectDiv").mouseover(function(){
		$("#MultiSelectList").show();

		$("#MultiSelectDiv").mouseout(function(){
			$("#MultiSelectList").hide();
		});
	});

});




</script>