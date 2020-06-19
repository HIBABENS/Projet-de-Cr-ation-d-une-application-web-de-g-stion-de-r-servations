<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-03 10:27:03
  from 'C:\xampp1\htdocs\AgenceT\test2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed77af750d5a4_38577987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6dc29f12e82ea61eed9dad792d69a982613571d' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\test2.html',
      1 => 1591179834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed77af750d5a4_38577987 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noms_catg']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>

<h3><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h3>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</body>
</html><?php }
}
