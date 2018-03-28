<?php
/* Smarty version 3.1.30, created on 2018-01-12 09:35:06
  from "D:\xampp\htdocs\2017.12\week5\day5\project\View\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a58733aa05774_05314171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7277301c33aadaab060351b87b9060f0980c232c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\2017.12\\week5\\day5\\project\\View\\edit.html',
      1 => 1515746098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a58733aa05774_05314171 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理系统</title>
</head>
<body>
	<center>
    <h2>学生信息管理系统</h2>
    <a href='index.php?c=user&a=add'>添加信息</a> |
    <a href='index.php?c=user&a=index'>查看信息</a>
    <hr/>
	<h3>修改信息</h3>
		<form action="index.php?c=user&a=update" method="post">
			<table border='1' width='600' cellpadding="15" cellspacing="0">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
" />
				<tr>
					<td align="right"  width="70">姓名：</td>
					<td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
"  required /></td>
				</tr>
				<tr>
					<td align="right">性别：</td>
					<td>
						<input type="radio" name="sex" value="m" <?php if ($_smarty_tpl->tpl_vars['res']->value['sex'] == 'm') {?> checked <?php } else { ?> <?php }?> /> 男
						<input type="radio" name="sex" value="w" <?php if ($_smarty_tpl->tpl_vars['res']->value['sex'] == 'w') {?> checked <?php } else { ?> <?php }?> /> 女
					</td>
				</tr>
				<tr>
					<td align="right">年龄：</td>
					<td><input type="text" name="age" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['age'];?>
"  required /></td>
				</tr>
				<tr>
					<td align="right">电话：</td>
					<td><input type="tel" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['phone'];?>
"  required /></td>
				</tr>
				<tr>
					<td align="right">邮箱：</td>
					<td><input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['email'];?>
"  required /></td>
				</tr>
				<tr>
					<td align="right">地址：</td>
					<td><input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['address'];?>
" required /></td>
				</tr>
				<tr>
					<td align="right">婚否：</td>
					<td>
						<input type="radio" name="hunfou" value="y" <?php if ($_smarty_tpl->tpl_vars['res']->value['hunfou'] == 'y') {?> checked <?php } else { ?> <?php }?> /> 是
						<input type="radio" name="hunfou" value="n" <?php if ($_smarty_tpl->tpl_vars['res']->value['hunfou'] == 'n') {?> checked <?php } else { ?> <?php }?> /> 否
					</td>
				</tr>
				<tr>
					<td align="right">爱好：</td>
					<td>
						<input type="checkbox" name="hobby[]" value="羽毛球"  <?php if (in_array('羽毛球',$_smarty_tpl->tpl_vars['res']->value['hobby'])) {?> checked <?php } else { ?> <?php }?> /> 羽毛球
						<input type="checkbox" name="hobby[]" value="CS1.6"  <?php if (in_array('CS1.6',$_smarty_tpl->tpl_vars['res']->value['hobby'])) {?> checked <?php } else { ?> <?php }?> /> CS1.6
						<input type="checkbox" name="hobby[]" value="吃鸡" <?php if (in_array('吃鸡',$_smarty_tpl->tpl_vars['res']->value['hobby'])) {?> checked <?php } else { ?> <?php }?> /> 吃鸡
						<input type="checkbox" name="hobby[]" value="LOL" <?php if (in_array('LOL',$_smarty_tpl->tpl_vars['res']->value['hobby'])) {?> checked <?php } else { ?> <?php }?> /> LOL
						<input type="checkbox" name="hobby[]" value="游泳" <?php if (in_array('游泳',$_smarty_tpl->tpl_vars['res']->value['hobby'])) {?> checked <?php } else { ?> <?php }?> /> 游泳
						<input type="checkbox" name="hobby[]" value="学习" <?php if (in_array('学习',$_smarty_tpl->tpl_vars['res']->value['hobby'])) {?> checked <?php } else { ?> <?php }?> /> 学习
					</td>
				</tr>
				<tr align="center">
					<td colspan="2">
						<input type="submit" value="修改" />
						<input type="reset" value="重置" />
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html><?php }
}
