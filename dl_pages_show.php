<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }
if(option::get('dl_pages_title')=="0"){
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=1');
	}
if(option::get('dl_pages_title2')=="0"){
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=1');
	}
if(option::get('dl_pages_title3')=="0"){
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=1');
	}
if(option::get('dl_pages_title4')=="0"){
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=1');
	}
if(option::get('dl_pages_title5')=="0"){
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=1');
	}
if(isset($_GET['add1'])){
	global $m;
	option::set('dl_pages_text' , $_POST['text1']);
	option::set('dl_pages_title' , $_POST['title1']);
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=1&ok');
	}
if(isset($_GET['add2'])){
	global $m;
	option::set('dl_pages_text2' , $_POST['text2']);
	option::set('dl_pages_title2' , $_POST['title2']);
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=2&ok');
	}
if(isset($_GET['add3'])){
	global $m;
	option::set('dl_pages_text3' , $_POST['text3']);
	option::set('dl_pages_title3' , $_POST['title3']);
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=3&ok');
	}
if(isset($_GET['add4'])){
	global $m;
	option::set('dl_pages_text4' , $_POST['text4']);
	option::set('dl_pages_title4' , $_POST['title4']);
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=4&ok');
	}
if(isset($_GET['add5'])){
	global $m;
	option::set('dl_pages_text5' , $_POST['text5']);
	option::set('dl_pages_title5' , $_POST['title5']);
	ReDirect(SYSTEM_URL.'index.php?mod=admin:setplug&plug=dl_pages&page=5&ok');
	}
loadhead();
?>
<?php
if($_REQUEST['page']=='dl_pages_one'){
echo "<h2>".option::get('dl_pages_title')."</h2></br>";
if(option::get('dl_pages_text')==""){echo '<div class="alert alert-danger">管理员未设置内容！</div>';}
echo option::get('dl_pages_text');
echo '</br></br>插件作者：<a href="http://blog.jt371.cn" target="_blank">D丶L</a> &nbsp;&nbsp;&nbsp; 程序作者：<a href="http://zhizhe8.net" target="_blank">无名智者</a>';
	}else{}
	
if($_REQUEST['page']=='dl_pages_two'){
echo "<h2>".option::get('dl_pages_title2')."</h2></br>";
if(option::get('dl_pages_text2')==""){echo '<div class="alert alert-danger">管理员未设置内容！</div>';}
echo option::get('dl_pages_text2');
echo '</br></br>插件作者：<a href="http://blog.jt371.cn" target="_blank">D丶L</a> &nbsp;&nbsp;&nbsp; 程序作者：<a href="http://zhizhe8.net" target="_blank">无名智者</a>';
	}else{}
	
if($_REQUEST['page']=='dl_pages_three'){
echo "<h2>".option::get('dl_pages_title3')."</h2></br>";
if(option::get('dl_pages_text3')==""){echo '<div class="alert alert-danger">管理员未设置内容！</div>';}
echo option::get('dl_pages_text3');
echo '</br></br>插件作者：<a href="http://blog.jt371.cn" target="_blank">D丶L</a> &nbsp;&nbsp;&nbsp; 程序作者：<a href="http://zhizhe8.net" target="_blank">无名智者</a>';
	}else{}
	
if($_REQUEST['page']=='dl_pages_four'){
echo "<h2>".option::get('dl_pages_title4')."</h2></br>";
if(option::get('dl_pages_text4')==""){echo '<div class="alert alert-danger">管理员未设置内容！</div>';}
echo option::get('dl_pages_text4');
echo '</br></br>插件作者：<a href="http://blog.jt371.cn" target="_blank">D丶L</a> &nbsp;&nbsp;&nbsp; 程序作者：<a href="http://zhizhe8.net" target="_blank">无名智者</a>';
	}else{}
	
if($_REQUEST['page']=='dl_pages_five'){

echo "<h2>".option::get('dl_pages_title5')."</h2></br>";
if(option::get('dl_pages_text5')==""){echo '<div class="alert alert-danger">管理员未设置内容！</div>';}
echo option::get('dl_pages_text5');
echo '</br></br>插件作者：<a href="http://blog.jt371.cn" target="_blank">D丶L</a> &nbsp;&nbsp;&nbsp; 程序作者：<a href="http://zhizhe8.net" target="_blank">无名智者</a>';
	}else{}
?>
<?php
loadfoot();
?>