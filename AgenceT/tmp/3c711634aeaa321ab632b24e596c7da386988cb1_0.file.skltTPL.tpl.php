<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-05 05:22:14
  from 'C:\xampp\htdocs\smarty\views\skltTPL.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb0dbe6cc7b12_42113807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c711634aeaa321ab632b24e596c7da386988cb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\views\\skltTPL.tpl',
      1 => 1588648698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb0dbe6cc7b12_42113807 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4717990595eb0dbe6cc6624_37511239', "detailmonsite");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'sklt.html');
}
/* {block "detailmonsite"} */
class Block_4717990595eb0dbe6cc6624_37511239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'detailmonsite' => 
  array (
    0 => 'Block_4717990595eb0dbe6cc6624_37511239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>premier detail</h1>
Label <input type="txt" name="note" />
<?php
}
}
/* {/block "detailmonsite"} */
}
