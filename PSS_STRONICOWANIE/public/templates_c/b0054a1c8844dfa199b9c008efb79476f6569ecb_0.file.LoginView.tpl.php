<?php
/* Smarty version 4.3.4, created on 2025-02-01 11:59:24
  from 'C:\xampp\htdocs\szp\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679dfe8cb89f69_29744387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0054a1c8844dfa199b9c008efb79476f6569ecb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szp\\app\\views\\LoginView.tpl',
      1 => 1735094890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679dfe8cb89f69_29744387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_828480768679dfe8cb7bbc4_33920921', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_828480768679dfe8cb7bbc4_33920921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_828480768679dfe8cb7bbc4_33920921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
	<legend>Logowanie do systemu</legend>
	<fieldset>
	<div class="mb-3">
	  <label for="id_login" class="form-label">Login</label>
	  <input type="text" class="form-control" id="id_login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
	</div>
	<div class="mb-3">
	  <label for="id_pass" class="form-label">Password</label>
	  <input type="password" class="form-control" name="pass" id="id_pass">
	</div>
	<button type="submit" class="btn btn-primary">Login</button>
</fieldset>
  </form>




<?php
}
}
/* {/block 'top'} */
}
