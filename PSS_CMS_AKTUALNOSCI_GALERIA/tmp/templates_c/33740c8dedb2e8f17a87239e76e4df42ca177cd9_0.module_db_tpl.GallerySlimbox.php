<?php
/* Smarty version 4.5.2, created on 2025-04-21 00:26:07
  from 'module_db_tpl:Gallery;Slimbox' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6805747f1e5773_50579457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33740c8dedb2e8f17a87239e76e4df42ca177cd9' => 
    array (
      0 => 'module_db_tpl:Gallery;Slimbox',
      1 => 1745187964,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6805747f1e5773_50579457 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="custom-gallery">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
    <?php if (!$_smarty_tpl->tpl_vars['image']->value->isdir) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" class="gallery-thumb" />
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<!-- Modal -->
<div id="imageModal" class="image-modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImage">
</div>
<?php }
}
