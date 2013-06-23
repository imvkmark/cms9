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
    [title] => 手机品牌
    [style] => 0
    [siteid] => 0
    [data] => Array
        (
        [3361] => Array
        (
            [linkageid] => 3361
            [name] => 小米
            [style] =>
            [parentid] => 0
            [child] => 0
            [arrchildid] => 3361
            [keyid] => 3360
            [listorder] => 0
            [description] =>
            [setting] =>
            [siteid] => 0
        )
    )

seajs
-----
	<script>
		var mk = mk || {};
		mk.seajsBase = '{JS_PATH}';
	</script>
	<script src="{JS_PATH}libs/seajs/2.0.0/sea.js" data-config="config"></script>

点击量排行
--------
	{pc:get sql="select p.title, p.url,pd.price from mk_hits h, mk_phone p, mk_phone_data pd where h.hitsid = concat('c-13-',p.id) and p.id = pd.id and p.catid=10 order by h.monthviews desc, p.updatetime desc" cache="0" num="9"}
	<ul class="listNum">
		{loop $data $key $val}
		<li><span class="price">￥:{$val[price]}</span><a href="{$val['url']}">{$val['title']}</a></li>
		{/loop}
	</ul>
	{/pc}

随机排行
-------

	{pc:get sql="select p.id, p.title,p.thumb, pd.price from mk_phone p, mk_phone_data pd where p.id = pd.id order by rand()" num="8"}
	{loop $data $k $v}
	<div class="item">
		<a href="{phoneUrl('main',$v[id])}"><img src="{$v[thumb]}" alt="{$v[title]}"></a>
		<a href="{phoneUrl('main',$v[id])}" class="title">{$v[title]}</a>
		<span class="price">{$v[price]}</span>
	</div>
	{/loop}
	{/pc}

无图片
-------

	{if $v[thumb]}
		<img src="{$v[thumb]}" alt="{$v[title]}">
	{else}
		<img src="{IMG_PATH}web/nopic.jpg" alt="{$v[title]}">
	{/if}

	{mkThumb($v[thumb], 'alt="'.$v[title].'"')}


万能字段
-------
	{FUNC(sendQuery~~{FIELD_VALUE})}