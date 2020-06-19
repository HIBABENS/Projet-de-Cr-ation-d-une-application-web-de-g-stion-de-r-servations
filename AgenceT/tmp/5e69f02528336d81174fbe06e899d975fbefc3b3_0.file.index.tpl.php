<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-05 04:42:29
  from 'C:\xampp\htdocs\smarty\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb0d295d2a0a5_14713856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e69f02528336d81174fbe06e899d975fbefc3b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\views\\index.tpl',
      1 => 1588646535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5eb0d295d2a0a5_14713856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\smarty-php\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
Hello
<?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br/>
<br/>
<table style="background:" <?php echo smarty_function_cycle(array('values'=>'silver, gray'),$_smarty_tpl);?>
 >
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Black_Pink']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
