<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class HAT_AssetsViewEdit extends ViewEdit
{

	function Display() {

        //本函数完成以下事项
        //1、初始化Framework
        //2、初始化GIS信息
        //3、加载基于AOS_Products的动态界面模板（FF）
        //4、正常Display
        //5、处理Framework中的相关字段
        //6、基于FF判断是否展开界面

        //1、初始化Framework
        require_once('modules/HAA_Frameworks/orgSelector_class.php');
        $current_framework_id = empty($this->bean->haa_frameworks_id)?"":$this->bean->haa_frameworks_id;
        $current_module = $this->module;
        $current_action = $this->action;
        $this->ss->assign('FRAMEWORK',set_framework_selector($current_framework_id,$current_module,$current_action,'haa_frameworks_id'));


        //2、初始化GIS信息
        ////关联地图图层
        if(!$this->bean->use_location_gis){
            $this->bean->map_type = $this->bean->asset_map_type;
            $this->bean->map_lat = $this->bean->asset_map_lat;
            $this->bean->map_lng = $this->bean->asset_map_lng;
            $this->bean->map_zoom = $this->bean->asset_map_zoom;
            $this->bean->map_marker_type = $this->bean->asset_map_marker_type;
            $this->bean->map_marker_data = $this->bean->asset_map_marker_data;
            $this->bean->map_layer_id = $this->bean->asset_map_layer_id;
        }


            //3判断是否已经设置有产品，如果有产品，则进一步的加载产品对应的FlexForm
        require_once('modules/HAA_FF/ff_include_editview.php');
        initEditViewByFF((!empty($this->bean->aos_products_id))?$this->bean->aos_products_id:"",'AOS_Products');

		if(isset($_REQUEST['woop_id']) && !empty($_REQUEST['woop_id'])  ){
			$woop_bean = BeanFactory :: getBean('HAM_WOOP')->retrieve_by_string_fields(array ('ID' => $_REQUEST['woop_id']));
			echo '<script>var source_wo_id_tt="'.$woop_bean->ham_wo_id.'"</script>';
		}

		parent::Display();

        $beanFramework = BeanFactory::getBean('HAA_Frameworks', $_SESSION["current_framework"]);
        //处理Framework中的相关字段
        if(isset($beanFramework)) {
            if($beanFramework->owning_person_field_rule=='TEXT'){
                $current_owning_person = isset($this->bean->owning_person)?($this->bean->owning_person):"";
                $current_owning_person_id=isset($this->bean->owning_person_id)?$this->bean->owning_person_id:"";
                $current_owning_person_desc=isset($this->bean->owning_person_desc)?$this->bean->owning_person_desc:"";
                echo ('<script>$("#owning_person").parent().html(\'<input type="hidden" name="owning_person" id="owning_person" value="'.$current_owning_person.'"/><input type="hidden" name="owning_person_id" id="owning_person_id" value="'.$current_owning_person_id.'"/><input type="text" name="owning_person_desc" id="owning_person_desc" value="'.$current_owning_person_desc.'"/>\');</script>');
            }


            if($beanFramework->using_person_field_rule=='TEXT'){
                $current_using_person = isset($this->bean->using_person)?($this->bean->using_person):"";
                $current_using_person_id=isset($this->bean->using_person_id)?$this->bean->using_person_id:"";
                $current_using_person_desc=isset($this->bean->using_person_desc)?$this->bean->using_person_desc:"";
                echo ('<script>$("#using_person").parent().html(\'<input type="hidden" name="using_person" id="using_person" value="'.$current_using_person.'"/><input type="hidden" name="using_person_id" id="using_person_id" value="'.$current_using_person_id.'"/><input type="text" name="using_person_desc" id="using_person_desc" value="'.$current_using_person_desc.'"/>\');</script>');
            }

            if($beanFramework->supplier_field_rule=='TEXT'){
                $current_supplier_org = isset($this->bean->supplier_org)?($this->bean->supplier_org):"";
                $current_supplier_org_id=isset($this->bean->supplier_org_id)?$this->bean->supplier_org_id:"";
                $current_supplier_desc=isset($this->bean->supplier_desc)?$this->bean->supplier_desc:"";
                echo ('<script>$("#supplier_org").parent().html(\'<input type="hidden" name="supplier_org" id="supplier_org" value="'.$current_supplier_org.'"/><input type="hidden" name="supplier_org_id" id="supplier_org_id" value="'.$current_supplier_org_id.'"/><input type="text" name="supplier_desc" id="supplier_desc" value="'.$current_supplier_desc.'"/>\');</script>');
            }

            if($beanFramework->source_reference_field_rule=='TEXT'){
                $current_source_reference = isset($this->bean->asset_source)?($this->bean->asset_source):"";
                $current_source_reference_id=isset($this->bean->asset_source_id)?$this->bean->asset_source_id:"";
                $current_source_reference_desc=isset($this->bean->asset_source_ref)?$this->bean->asset_source_ref:"";
                echo ('<script>$("#asset_source").parent().html(\'<input type="hidden" name="asset_source" id="asset_source" value="'.$current_source_reference.'"/><input type="hidden" name="asset_source_id" id="asset_source_id" value="'.$current_source_reference_id.'"/><input type="text" name="asset_source_ref" id="asset_source_ref" value="'.$current_source_reference_desc.'"/>\');</script>');
            }
        }

            /******************************
            我们尝试使用以下语句在Display之前进行Panel属性的变更，但无法生效。属性变更了，依然还是会展开，所有采用JS的方式在加载后进行批量处理。
			可以尝试在TPL模板中进行优化。目前可以实现功能，但打开数据时会有先展开但收缩的过程
			foreach($this->ev->defs['templateMeta']['tabDefs'] as $tab_key => $tab_field ) {
                	$this->ev->defs['templateMeta']['tabDefs'][$tab_key]['panelDefault']='expanded';
            }
            foreach($this->ev->defs['templateMeta']['tabDefs'] as $tab_obj ) {
                	echo $tab_obj['panelDefault'].'</br>';
                }
			//END：与FF相关的内容说明****************************************************
                */


    }

}//end class
