<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-03 09:41:10
  from 'C:\xampp1\htdocs\AgenceT\views\hello.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed770363d1181_42520950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc53d3790c03bf77e88286e153b18825aa463ac8' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\views\\hello.html',
      1 => 1591092597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/header.html' => 1,
    'file:views/footer.html' => 1,
  ),
),false)) {
function content_5ed770363d1181_42520950 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
	<?php $_smarty_tpl->_subTemplateRender('file:views/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
	<h1>HELLO</h1>
	<?php if ($_smarty_tpl->tpl_vars['name']->value == 'Fred') {?>
  <h2>Bienvenue, Monsieur.</h2>
<?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 'Wilma') {?>
 <h2> Bienvenue madame.</h2>
<?php } else { ?>
  Bienvenue, qui que vous soyez.
<?php }?>

<h1><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
 est impaire</h1>

<?php if ($_smarty_tpl->tpl_vars['val']->value%2 == 0) {?>
<h1><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
 est paire</h1>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Black_Pink']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>

<h3><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h3>
<h3><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</h3>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender('file:views/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
