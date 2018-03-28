<?php
/* Smarty version 3.1.30, created on 2018-03-27 12:28:46
  from "D:\xampp\htdocs\php\week5\day5\project\View\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aba1cde193345_21709122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e608c7533430109350c799ad7e7c8595a0cd0e4d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php\\week5\\day5\\project\\View\\index.html',
      1 => 1515895522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aba1cde193345_21709122 (Smarty_Internal_Template $_smarty_tpl) {
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
	<h3>查看信息</h3>
	<table border='1' width='1200'>
		<tr>
			<th>ID</th>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>电话</th>
			<th>邮箱</th>
			<th>地址</th>
			<th>婚否</th>
			<th>爱好</th>
			<th>操作</th>
		</tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
		<tr align='center'>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['age'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['hunfou'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['hobby'];?>
</td>
			<td>
				<a href="index.php?c=user&a=delete&i=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
				<a href="index.php?c=user&a=edit&i=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
			</td>
		</tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
	</center>
</body>
</html><?php }
}
