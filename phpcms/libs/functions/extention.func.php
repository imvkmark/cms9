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

function appScore($direction) {
	$img = array();
	for($i=0; $i< $direction; $i++) {
		$img[] = '<img src="'.CSS_PATH.'/images/raty/star-on.png" />';
	}
	return implode('&nbsp;', $img);
}
function mkStar($direction) {
	$img = array();
	for($i=0; $i< $direction; $i++) {
		$img[] = '<img src="'.CSS_PATH.'/images/raty/star-on.png" />';
	}
	return implode('&nbsp;', $img);
}
function optionsToArray($options) {
	$arr = explode("\n", $options);
	$new = array();
	foreach($arr as $v) {
		$tmp = explode('|', $v);
		$new[] = array(
			'key'=>$tmp[1],
			'val'=>$tmp[0]
		);
	}
	return $new;
}

function phoneUrl($type, $id){
	return 'index.php?m=content&c=index&a=phone&t='.$type.'&id='.$id;
}

function mkThumb($thumb, $ext = ''){
	$url = '';
	if ($thumb) {
		$url = "<img src=\"{$thumb}\" {$ext}>";
	} else {
		$url = "<img src=\"".IMG_PATH."web/nopic.jpg\" {$ext}>";
	}
	return $url;
}