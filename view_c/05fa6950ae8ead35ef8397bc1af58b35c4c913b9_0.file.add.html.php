<?php
/* Smarty version 3.1.30, created on 2018-03-27 12:38:04
  from "D:\xampp\htdocs\php\case\5.2smarty_stu\View\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aba1f0cb08e38_69599487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05fa6950ae8ead35ef8397bc1af58b35c4c913b9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php\\case\\5.2smarty_stu\\View\\add.html',
      1 => 1515895523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aba1f0cb08e38_69599487 (Smarty_Internal_Template $_smarty_tpl) {
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
	<h3>添加信息</h3>
		<form action="index.php?c=user&a=insert" method="post">
			<table border='1' width='600' cellpadding="15" cellspacing="0">
				<tr>
					<td align='right'>姓名：</td>
					<td ><input type="text" name="name" value="" required /></td>
				</tr>
				<tr>
					<td align='right'>性别：</td>
					<td>
						<input type="radio" name="sex" value="m" checked /> 男
						<input type="radio" name="sex" value="w" /> 女
					</td>
				</tr>
				<tr>
					<td align='right'>年龄：</td>
					<td><input type="text" name="age" value=""  required /></td>
				</tr>
				<tr>
					<td align='right'>电话：</td>
					<td><input type="tel" name="phone" value=""  required /></td>
				</tr>
				<tr>
					<td align='right'>邮箱：</td>
					<td><input type="email" name="email" value=""  required /></td>
				</tr>
				<tr>
					<td align='right'>地址：</td>
					<td><input type="text" name="address" value="" required /></td>
				</tr>
				<tr>
					<td align='right'>婚否：</td>
					<td>
						<input type="radio" name="hunfou" value="y" /> 是
						<input type="radio" name="hunfou" value="n" checked /> 否
					</td>
				</tr>
				<tr>
					<td align='right'>爱好：</td>
					<td>
						<input type="checkbox" name="hobby[]" value="羽毛球" /> 羽毛球
						<input type="checkbox" name="hobby[]" value="CS1.6" /> CS1.6
						<input type="checkbox" name="hobby[]" value="吃鸡" /> 吃鸡
						<input type="checkbox" name="hobby[]" value="LOL" /> LOL
						<input type="checkbox" name="hobby[]" value="游泳" /> 游泳
						<input type="checkbox" name="hobby[]" value="学习" /> 学习
					</td>
				</tr>
				<tr align="center">
					<td colspan="2">
						<input type="submit" value="提交" />
						<input type="reset" value="重置" />
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html><?php }
}
