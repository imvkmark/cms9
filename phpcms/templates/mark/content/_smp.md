统计点击量
---------
	<script language="JavaScript" src="{APP_PATH}api.php?op=count&id={$id}&modelid={$modelid}"></script>

评论模块
--------
	{if $allow_comment && module_exists('comment')}
	<iframe src="{APP_PATH}index.php?m=comment&c=index&a=init&commentid={id_encode("content_$catid",$id,$siteid)}&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
	{/if}

show 页面调试
------------
	{print_r(get_defined_vars())}
	{print_r($rs)}
	Array
    (
        [id] => 146
        [catid] => 15
        [typeid] => 0
        [title] => 测试下载3
        [style] =>
        [thumb] => http://mall.sdinfo.cc/uploadfile/2013/0619/20130619101057291.jpg
        [keywords] =>
        [description] => G:\wamp\www\template\tpl\qilu\images\app
        [posids] => 0
        [url] => http://mall.sdinfo.cc/index.php?m=content&c=index&a=show&catid=15&id=146
        [listorder] => 0
        [status] => 99
        [sysadd] => 1
        [islink] => 0
        [username] => admin
        [inputtime] => 1371651045
        [updatetime] => 1371655873
        [appcat] => 3429
        [fee] => 0
        [content] => G:\wamp\www\template\tpl\qilu\images\app
        [readpoint] => 0
        [groupids_view] =>
        [paginationtype] => 0
        [maxcharperpage] => 10000
        [template] =>
        [paytype] => 0
        [allow_comment] => 1
        [relation] =>
        [file] => array (
	      0 =>
	      array (
	        'fileurl' => 'http://mall.sdinfo.cc/uploadfile/2013/0619/20130619113046340.apk',
	        'filename' => '2',
	      ),
	    )
    )

时间替换
-------
	<?php echo preg_replace("/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/", '$1年 $2月 $3日  $4:$5',$inputtime);?>&nbsp;&nbsp;

linkage 联动菜单
---------------
	Array
	(
	    [linkageid] => 3397
	    [name] => 游戏
	    [style] =>
	    [parentid] => 0
	    [child] => 1
	    [arrchildid] => 3397,3435,3436,3437,3438,3439,3440,3441,3442,3443
	    [keyid] => 3384
	    [listorder] => 0
	    [description] =>
	    [setting] =>
	    [siteid] => 0
	)

seajs
-----
	<script>
		var mk = mk || {};
		mk.seajsBase = '{JS_PATH}';
	</script>
	<script src="{JS_PATH}libs/seajs/2.0.0/sea.js" data-config="config"></script>