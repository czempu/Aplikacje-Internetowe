<?php
/* Smarty version 4.3.4, created on 2024-12-25 02:22:24
  from 'C:\xampp2\htdocs\szp\app\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_676b5e5046bb47_75111803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48c18674067eb6df03f482e54e0a824ef3526c0c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\szp\\app\\views\\home.tpl',
      1 => 1735089725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676b5e5046bb47_75111803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_755065915676b5e50467e55_99907532', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_755065915676b5e50467e55_99907532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_755065915676b5e50467e55_99907532',
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
