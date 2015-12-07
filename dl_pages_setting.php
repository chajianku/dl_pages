<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }
if(isset($_REQUEST['plug']) && $_REQUEST['plug']=="dl_pages" && $_REQUEST['page']==""){ReDirect('index.php?mod=admin:setplug&plug=dl_pages&page=1');}
if (isset($_GET['ok'])) {
	echo '<div class="alert alert-success">设置已成功保存！</div>';
}



if(option::get('dl_pages_title')=="0"){
	global $m;
    option::set('dl_pages_text' ,'');
    option::set('dl_pages_title' ,'');
	}
if(option::get('dl_pages_title2')=="0"){
	global $m;
    option::set('dl_pages_text2' ,'');
    option::set('dl_pages_title2' ,'');
	}
if(option::get('dl_pages_title3')=="0"){
	global $m;
    option::set('dl_pages_text3' ,'');
    option::set('dl_pages_title3' ,'');
	}
if(option::get('dl_pages_title4')=="0"){
	global $m;
    option::set('dl_pages_text4' ,'');
    option::set('dl_pages_title4' ,'');
	}
if(option::get('dl_pages_title5')=="0"){
	global $m;
    option::set('dl_pages_text5' ,'');
    option::set('dl_pages_title5' ,'');
	}

?>
<h2>自定义页面设置</h2><br/>
<ul class="nav nav-tabs" role="tablist">
  <li<?php if(isset($_REQUEST['plug']) && $_REQUEST['plug']=="dl_pages" && $_REQUEST['page']=="1"){echo ' class="active"';}?>><a href="index.php?mod=admin:setplug&plug=dl_pages&page=1">Page①</a></li>
  <li<?php if(isset($_REQUEST['page']) && $_REQUEST['page']=="2"){echo ' class="active"';}?>><a href="index.php?mod=admin:setplug&plug=dl_pages&page=2">Page②</a></li>
  <li<?php if(isset($_REQUEST['page']) && $_REQUEST['page']=="3"){echo ' class="active"';}?>><a href="index.php?mod=admin:setplug&plug=dl_pages&page=3">Page③</a></li>
  <li<?php if(isset($_REQUEST['page']) && $_REQUEST['page']=="4"){echo ' class="active"';}?>><a href="index.php?mod=admin:setplug&plug=dl_pages&page=4">Page④</a></li>
  <li<?php if(isset($_REQUEST['page']) && $_REQUEST['page']=="5"){echo ' class="active"';}?>><a href="index.php?mod=admin:setplug&plug=dl_pages&page=5">Page⑤</a></li>

</ul>
<?php

if(isset($_REQUEST['page']) && $_REQUEST['page']=="1")
{echo '<form action="index.php?plugin=dl_pages&add1" method="post">
  <p>&nbsp;</p>
  <p>常用HTML代码： <br />
    换行：&lt;br&gt; <br />
    空格：&amp;nbsp; <br />
    链接：&lt;a href=&quot;链接地址&quot; target=&quot;_blank&quot;&gt;链接文字&lt;/a&gt;<br />
    段落：&lt;p&gt;段落内容&lt;/p&gt; <br />
    图片：&lt;img src=&quot;图片地址&quot; width=&quot;图片宽度&quot; height=&quot;图片高度&quot;/&gt; <br />
    下划线：&lt;u&gt;加下划线的内容&lt;/u&gt;<br />
    加粗：&lt;b&gt;要加粗的内容&lt;/b&gt;  </p>
  <p>程序自带的提示框：   
  <p> &lt;div class=&quot;alert alert-success&quot;&gt;内容&lt;/div&gt; <br />
    &lt;div class=&quot;alert alert-warning&quot;&gt;内容&lt;/div&gt; <br />
  &lt;div class=&quot;alert alert-danger&quot;&gt;内容&lt;/div&gt;   <br/>
  &lt;div class=&quot;alert alert-info&quot;&gt;内容&lt;/div&gt; <br/>
    <br/>
  <h3 class="panel-title"><span class="glyphicon glyphicon-chevron-down"></span>自定义页面①设置</h3></br>
  <div class="input-group">
  <span class="input-group-addon">标题</span>
  <input type="text" name="title1" class="form-control" placeholder="温馨提示：不设置标题用户将无法看到您设置的页面哦o(∩_∩)o " value="'.htmlspecialchars(option::get("dl_pages_title")).'">
</div>
<br/>
    <p>页面内容：</p>
    <p>
      <textarea class="form-control" name="text1" style="height:350px">'.htmlspecialchars(option::get("dl_pages_text")).'</textarea>
      <br/><br/>
  </p>
    </p>
  <button type="submit" class="btn btn-success">保存设置</button>
</form>';
	}
	
if(isset($_REQUEST['page']) && $_REQUEST['page']=="2")
{echo '<form action="index.php?plugin=dl_pages&add2" method="post">
  <p>&nbsp;</p>
  <p>常用HTML代码： <br />
    换行：&lt;br&gt; <br />
    空格：&amp;nbsp; <br />
    链接：&lt;a href=&quot;链接地址&quot; target=&quot;_blank&quot;&gt;链接文字&lt;/a&gt;<br />
    段落：&lt;p&gt;段落内容&lt;/p&gt; <br />
    图片：&lt;img src=&quot;图片地址&quot; width=&quot;图片宽度&quot; height=&quot;图片高度&quot;/&gt; <br />
    下划线：&lt;u&gt;加下划线的内容&lt;/u&gt;<br />
    加粗：&lt;b&gt;要加粗的内容&lt;/b&gt;  </p>
  <p>程序自带的提示框：   
  <p> &lt;div class=&quot;alert alert-success&quot;&gt;内容&lt;/div&gt; <br />
    &lt;div class=&quot;alert alert-warning&quot;&gt;内容&lt;/div&gt; <br />
  &lt;div class=&quot;alert alert-danger&quot;&gt;内容&lt;/div&gt;   <br/>
  &lt;div class=&quot;alert alert-info&quot;&gt;内容&lt;/div&gt; <br/>
    <br/>
  <h3 class="panel-title"><span class="glyphicon glyphicon-chevron-down"></span>自定义页面②设置</h3></br>
  <div class="input-group">
  <span class="input-group-addon">标题</span>
  <input type="text" name="title2" class="form-control" placeholder="温馨提示：不设置标题用户将无法看到您设置的页面哦o(∩_∩)o " value="'.htmlspecialchars(option::get("dl_pages_title2")).'">
</div>
<br/>
    <p>页面内容：</p>
    <p>
      <textarea class="form-control" name="text2" style="height:350px">'.htmlspecialchars(option::get("dl_pages_text2")).'</textarea>
      <br/><br/>
  </p>
    </p>
  <button type="submit" class="btn btn-success">保存设置</button>
</form>';
	}
	
if(isset($_REQUEST['page']) && $_REQUEST['page']=="3")
{echo '<form action="index.php?plugin=dl_pages&add3" method="post">
  <p>&nbsp;</p>
  <p>常用HTML代码： <br />
    换行：&lt;br&gt; <br />
    空格：&amp;nbsp; <br />
    链接：&lt;a href=&quot;链接地址&quot; target=&quot;_blank&quot;&gt;链接文字&lt;/a&gt;<br />
    段落：&lt;p&gt;段落内容&lt;/p&gt; <br />
    图片：&lt;img src=&quot;图片地址&quot; width=&quot;图片宽度&quot; height=&quot;图片高度&quot;/&gt; <br />
    下划线：&lt;u&gt;加下划线的内容&lt;/u&gt;<br />
    加粗：&lt;b&gt;要加粗的内容&lt;/b&gt;  </p>
  <p>程序自带的提示框：   
  <p> &lt;div class=&quot;alert alert-success&quot;&gt;内容&lt;/div&gt; <br />
    &lt;div class=&quot;alert alert-warning&quot;&gt;内容&lt;/div&gt; <br />
  &lt;div class=&quot;alert alert-danger&quot;&gt;内容&lt;/div&gt;   <br/>
  &lt;div class=&quot;alert alert-info&quot;&gt;内容&lt;/div&gt; <br/>
    <br/>
  <h3 class="panel-title"><span class="glyphicon glyphicon-chevron-down"></span>自定义页面③设置</h3></br>
  <div class="input-group">
  <span class="input-group-addon">标题</span>
  <input type="text" name="title3" class="form-control" placeholder="温馨提示：不设置标题用户将无法看到您设置的页面哦o(∩_∩)o " value="'.htmlspecialchars(option::get("dl_pages_title3")).'">
</div>
<br/>
    <p>页面内容：</p>
    <p>
      <textarea class="form-control" name="text3" style="height:350px">'.htmlspecialchars(option::get("dl_pages_text3")).'</textarea>
      <br/><br/>
  </p>
    </p>
  <button type="submit" class="btn btn-success">保存设置</button>
</form>';
	}
	
if(isset($_REQUEST['page']) && $_REQUEST['page']=="4")
{echo '<form action="index.php?plugin=dl_pages&add4" method="post">
  <p>&nbsp;</p>
  <p>常用HTML代码： <br />
    换行：&lt;br&gt; <br />
    空格：&amp;nbsp; <br />
    链接：&lt;a href=&quot;链接地址&quot; target=&quot;_blank&quot;&gt;链接文字&lt;/a&gt;<br />
    段落：&lt;p&gt;段落内容&lt;/p&gt; <br />
    图片：&lt;img src=&quot;图片地址&quot; width=&quot;图片宽度&quot; height=&quot;图片高度&quot;/&gt; <br />
    下划线：&lt;u&gt;加下划线的内容&lt;/u&gt;<br />
    加粗：&lt;b&gt;要加粗的内容&lt;/b&gt;  </p>
  <p>程序自带的提示框：   
  <p> &lt;div class=&quot;alert alert-success&quot;&gt;内容&lt;/div&gt; <br />
    &lt;div class=&quot;alert alert-warning&quot;&gt;内容&lt;/div&gt; <br />
  &lt;div class=&quot;alert alert-danger&quot;&gt;内容&lt;/div&gt;   <br/>
  &lt;div class=&quot;alert alert-info&quot;&gt;内容&lt;/div&gt; <br/>
    <br/>
  <h3 class="panel-title"><span class="glyphicon glyphicon-chevron-down"></span>自定义页面④设置</h3></br>
  <div class="input-group">
  <span class="input-group-addon">标题</span>
  <input type="text" name="title4" class="form-control" placeholder="温馨提示：不设置标题用户将无法看到您设置的页面哦o(∩_∩)o " value="'.htmlspecialchars(option::get("dl_pages_title4")).'">
</div>
<br/>
    <p>页面内容：</p>
    <p>
      <textarea class="form-control" name="text4" style="height:350px">'.htmlspecialchars(option::get("dl_pages_text4")).'</textarea>
      <br/><br/>
  </p>
    </p>
  <button type="submit" class="btn btn-success">保存设置</button>
</form>';
	}
	
if(isset($_REQUEST['page']) && $_REQUEST['page']=="5")
{echo '<form action="index.php?plugin=dl_pages&add5" method="post">
  <p>&nbsp;</p>
  <p>常用HTML代码： <br />
    换行：&lt;br&gt; <br />
    空格：&amp;nbsp; <br />
    链接：&lt;a href=&quot;链接地址&quot; target=&quot;_blank&quot;&gt;链接文字&lt;/a&gt;<br />
    段落：&lt;p&gt;段落内容&lt;/p&gt; <br />
    图片：&lt;img src=&quot;图片地址&quot; width=&quot;图片宽度&quot; height=&quot;图片高度&quot;/&gt; <br />
    下划线：&lt;u&gt;加下划线的内容&lt;/u&gt;<br />
    加粗：&lt;b&gt;要加粗的内容&lt;/b&gt;  </p>
  <p>程序自带的提示框：   
  <p> &lt;div class=&quot;alert alert-success&quot;&gt;内容&lt;/div&gt; <br />
    &lt;div class=&quot;alert alert-warning&quot;&gt;内容&lt;/div&gt; <br />
  &lt;div class=&quot;alert alert-danger&quot;&gt;内容&lt;/div&gt;   <br/>
  &lt;div class=&quot;alert alert-info&quot;&gt;内容&lt;/div&gt; <br/>
    <br/>
  <h3 class="panel-title"><span class="glyphicon glyphicon-chevron-down"></span>自定义页面⑤设置</h3></br>
  <div class="input-group">
  <span class="input-group-addon">标题</span>
  <input type="text" name="title5" class="form-control" placeholder="温馨提示：不设置标题用户将无法看到您设置的页面哦o(∩_∩)o " value="'.htmlspecialchars(option::get("dl_pages_title5")).'">
</div>
<br/>
    <p>页面内容：</p>
    <p>
      <textarea class="form-control" name="text5" style="height:350px">'.htmlspecialchars(option::get("dl_pages_text5")).'</textarea>
      <br/><br/>
  </p>
    </p>
  <button type="submit" class="btn btn-success">保存设置</button>
</form>';
	}
?>
