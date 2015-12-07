<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }
/*
Plugin Name: 自定义页面
Version: 1.3
Plugin URL:https://www.tbsign.cn
Description: 用户可设置自定义页面
Author: D丶L
Author Email:wuyao@jt371.cn
Author URL: http://tbsign.cn
For: 不限
*/
function dl_pages_navi1() {
        echo '<li ';
        if(isset($_GET['plugin']) && $_GET['plugin'] == 'dl_pages' && $_REQUEST['page']=='dl_pages_one') { echo 'class="active"'; }
        echo '><a href="index.php?plugin=dl_pages&page=dl_pages_one"><span class="glyphicon glyphicon-file"></span>'.strip_tags(option::get('dl_pages_title')).'</a></li>';
}
function dl_pages_navi2() {
        echo '<li ';
        if(isset($_GET['plugin']) && $_GET['plugin'] == 'dl_pages' && $_REQUEST['page']=='dl_pages_two') { echo 'class="active"'; }
        echo '><a href="index.php?plugin=dl_pages&page=dl_pages_two"><span class="glyphicon glyphicon-file"></span>'.strip_tags(option::get('dl_pages_title2')).'</a></li>';
}
function dl_pages_navi3() {
        echo '<li ';
        if(isset($_GET['plugin']) && $_GET['plugin'] == 'dl_pages' && $_REQUEST['page']=='dl_pages_three') { echo 'class="active"'; }
        echo '><a href="index.php?plugin=dl_pages&page=dl_pages_three"><span class="glyphicon glyphicon-file"></span>'.strip_tags(option::get('dl_pages_title3')).'</a></li>';
}
function dl_pages_navi4() {
        echo '<li ';
        if(isset($_GET['plugin']) && $_GET['plugin'] == 'dl_pages' && $_REQUEST['page']=='dl_pages_four') { echo 'class="active"'; }
        echo '><a href="index.php?plugin=dl_pages&page=dl_pages_four"><span class="glyphicon glyphicon-file"></span>'.strip_tags(option::get('dl_pages_title4')).'</a></li>';
}
function dl_pages_navi5() {
        echo '<li ';
        if(isset($_GET['plugin']) && $_GET['plugin'] == 'dl_pages' && $_REQUEST['page']=='dl_pages_five') { echo 'class="active"'; }
        echo '><a href="index.php?plugin=dl_pages&page=dl_pages_five"><span class="glyphicon glyphicon-file"></span>'.strip_tags(option::get('dl_pages_title5')).'</a></li>';
}
function dl_pages_setting() {
        echo '<li ';
        if(isset($_GET['plugin']) && $_GET['plugin'] == 'dl_pages') { echo 'class="active"'; }
        echo '><a href="index.php?mod=admin:setplug&plug=dl_pages&page=1"><span class="glyphicon glyphicon-file"></span>自定义页面设置</a></li>';
}
if(option::get('dl_pages_title')!="" && option::get('dl_pages_title')!="0"){
        addAction('navi_7','dl_pages_navi1');
        addAction('navi_1','dl_pages_navi1');
        }
if(option::get('dl_pages_title2')!="" && option::get('dl_pages_title2')!="0"){
        addAction('navi_7','dl_pages_navi2');
        addAction('navi_1','dl_pages_navi2');
        }
if(option::get('dl_pages_title3')!="" && option::get('dl_pages_title3')!="0"){
        addAction('navi_7','dl_pages_navi3');
        addAction('navi_1','dl_pages_navi3');
        }
if(option::get('dl_pages_title4')!="" && option::get('dl_pages_title4')!="0"){
        addAction('navi_7','dl_pages_navi4');
        addAction('navi_1','dl_pages_navi4');
        }
if(option::get('dl_pages_title5')!="" && option::get('dl_pages_title5')!="0"){
        addAction('navi_7','dl_pages_navi5');
        addAction('navi_1','dl_pages_navi5');
        }
addAction('navi_3','dl_pages_setting');
?>