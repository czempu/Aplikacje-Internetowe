<?php
/* Smarty version 4.5.2, created on 2025-04-19 20:41:42
  from 'C:\xampp3\htdocs\pss\admin\themes\OneEleven\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6803ee664f7272_87232658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b00f2e886d7686c21eb27c76769e97e04c60070' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\pss\\admin\\themes\\OneEleven\\templates\\messages.tpl',
      1 => 1745086370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6803ee664f7272_87232658 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value[0] != '') {?><aside class="message pageerrorcontainer" role="alert"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
if ($_smarty_tpl->tpl_vars['error']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></aside><?php }
if ((isset($_smarty_tpl->tpl_vars['messages']->value)) && $_smarty_tpl->tpl_vars['messages']->value[0] != '') {?><aside class="message pagemcontainer" role="status"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
if ($_smarty_tpl->tpl_vars['message']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></aside><?php }
}
}
