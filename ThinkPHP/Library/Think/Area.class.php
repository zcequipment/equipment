<?php
namespace Think;
	/*
	 *城市控件
	 *
	 * **/
	class Area{
		public static function city($pro = array("省","市","县/区")){
		$city = json_encode($pro);	
		$str="";
		if(!defined('CALENDAR_INIT')){
			define('CALENDAR_INIT',1);
			$str.='<select id="province" class="area" name="province">
                         <option></option>
                          </select>
                          <select id="city" class="area" name="city">
                               <option></option>
                           </select>
                          <select id="county" class="area" name="county">
                                  <option></option>
                            </select>
							<script type="text/javascript"  src="'.__ROOT__.'/Public/js/area.js"></script>
							<script type="text/javascript">_init_area('.$city.');</script>';
		}
		return $str;
	}
}
?>