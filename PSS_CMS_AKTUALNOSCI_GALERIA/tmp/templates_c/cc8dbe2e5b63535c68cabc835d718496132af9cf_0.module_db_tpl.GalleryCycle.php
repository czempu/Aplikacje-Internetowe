<?php
/* Smarty version 4.5.2, created on 2025-04-21 00:16:34
  from 'module_db_tpl:Gallery;Cycle' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_68057242c68b97_60707527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc8dbe2e5b63535c68cabc835d718496132af9cf' => 
    array (
      0 => 'module_db_tpl:Gallery;Cycle',
      1 => 1745088097,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68057242c68b97_60707527 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="slides">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
	<?php if (!$_smarty_tpl->tpl_vars['image']->value->isdir) {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" />
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div id="caption">&nbsp;</div><?php }
}
