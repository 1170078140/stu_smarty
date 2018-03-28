<?php
/* Smarty version 3.1.30, created on 2018-03-27 12:29:01
  from "D:\xampp\htdocs\php\week5\day5\project\View\success.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aba1cede779e6_04713677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3241476618fd538e7241f53a5be7666623aa5355' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php\\week5\\day5\\project\\View\\success.html',
      1 => 1515895522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aba1cede779e6_04713677 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html;" http-equiv="Content-Type" charset="utf-8">
<title>系统发生错误</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
html{ overflow-y: scroll; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
img{ border: 0; }
.error{ padding: 24px 48px; }
.face{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
h1{ font-size: 32px; line-height: 48px; color:red;}
.error .content{ padding-top: 10px}
.error .info{ margin-bottom: 12px; }
.error .info .title{ margin-bottom: 3px; }
.error .info .title h3{ color: #000; font-weight: 700; font-size: 16px; }
.error .info .text{ line-height: 24px; }
.copyright{ padding: 12px 48px; color: #999; }
.copyright a{ color: #000; text-decoration: none; }
</style>
</head>
<body>
<div class="error">
<p class="face">:)</p>
<h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
<div class="content">
	<div class="info"><span id="seconds"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</span>秒之后自动 <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
"> 跳转</a></div>
</div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
	var seconds=document.getElementById('seconds');
	var num=seconds.innerHTML;

	var n=num;
	var timer=setInterval(function () {
		n--;
        seconds.innerHTML=n;
		if(n==1){
		    clearInterval(timer);
            window.location.href='<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
';
		}
    },1000)

<?php echo '</script'; ?>
><?php }
}
