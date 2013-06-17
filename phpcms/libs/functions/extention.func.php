<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
function sendQuery($var=0){
$data = "
<select name='info[phoneid]' id='_phoneid'></select>
<script>
	seajs.use(['mustache','ms','ui-css','ms-css','ms-filter','ms-filter-css'], function(mustache){
	var tpl =
		'{{#phones}}' +
		'<option value=\"{{pid}}\"{{#sel}} selected=\"selected\"{{/sel}}>{{pname}}</option>' +
		'{{/phones}}';
		$.post('index.php?m=content&c=content&a=phone&pc_hash={$_GET['pc_hash']}',{adefault:$var},function(data){
			var html = mustache.to_html(tpl,$.parseJSON(data));
			$('#_phoneid').append(html).multiselect({
				multiple : false,
				selectedList : 1
			}).multiselectfilter().multiselect('refresh');
		});
	});
</script>";
 return $data;
}