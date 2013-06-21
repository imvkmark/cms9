<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
function sendQuery($var=''){
	if ($var) {
		$set = "$('#_phoneid').combobox('setValue','".$var."');";
	} else {
		$set = '';
	}
$data = <<<SCRIPT
	<select name='info[phoneid]' id='_phoneid'></select>
	<script>
		seajs.use(['mustache','easyui','easyui-css'], function(mustache){
			$('#_phoneid').combobox({
			    url:'index.php?m=dbsource&c=call&a=get&id=1',
			    width:200,
			    valueField:'pid',
			    textField:'pname'
			});
			$set
		});
	</script>
SCRIPT;
	return $data;
}