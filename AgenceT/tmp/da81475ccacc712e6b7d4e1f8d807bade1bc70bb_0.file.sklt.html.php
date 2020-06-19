<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-05 05:21:13
  from 'C:\xampp\htdocs\smarty\views\sklt.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb0dba9ec3731_90767753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da81475ccacc712e6b7d4e1f8d807bade1bc70bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\views\\sklt.html',
      1 => 1588648743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb0dba9ec3731_90767753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<body>
	
	<a href="page1.php">Inscription</a><br/><a href="page2.php">Nom</a><br/><a href="page3.php">Note</a><br/>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4511318965eb0dba9eb7de5_21587559', "detailmonsite");
?>


</body><?php }
/* {block "detailmonsite"} */
class Block_4511318965eb0dba9eb7de5_21587559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'detailmonsite' => 
  array (
    0 => 'Block_4511318965eb0dba9eb7de5_21587559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "detailmonsite"} */
}
