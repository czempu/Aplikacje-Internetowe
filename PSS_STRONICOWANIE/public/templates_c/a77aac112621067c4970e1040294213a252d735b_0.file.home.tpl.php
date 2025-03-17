<?php
/* Smarty version 4.3.4, created on 2025-02-01 11:59:17
  from 'C:\xampp\htdocs\szp\app\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679dfe85c90a54_40986753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a77aac112621067c4970e1040294213a252d735b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szp\\app\\views\\home.tpl',
      1 => 1735089726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679dfe85c90a54_40986753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1185155986679dfe85baad58_32932790', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1185155986679dfe85baad58_32932790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1185155986679dfe85baad58_32932790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="video-background-container">
    <video autoplay muted loop class="video-background">
      <source src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vid/home_bg.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <?php
}
}
/* {/block 'top'} */
}
