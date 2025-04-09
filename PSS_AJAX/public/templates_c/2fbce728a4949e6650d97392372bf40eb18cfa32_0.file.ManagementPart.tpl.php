<?php
/* Smarty version 4.3.4, created on 2025-04-10 01:09:41
  from 'C:\xampp2\htdocs\szp\app\views\ManagementPart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67f6fe35362286_78207274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fbce728a4949e6650d97392372bf40eb18cfa32' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\szp\\app\\views\\ManagementPart.tpl',
      1 => 1744239909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f6fe35362286_78207274 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Organizations']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
<div class="col"><div class="card h-100 shadow-sm"><div class="card-body"><h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['o']->value['name'];?>
</h5><?php if ($_smarty_tpl->tpl_vars['o']->value['idRole'] == 9999) {?><p><a href="#" class="btn btn-sm btn-danger">Waiting</a></p><?php } else { ?><p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Managementjoin&organization=<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" class="btn btn-sm btn-success">Join</a></p><?php }?></div></div></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
