<?php
/* Smarty version 4.3.4, created on 2025-02-01 09:16:26
  from 'C:\xampp2\htdocs\szp\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679dd85a892d94_80919480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d9646c209feb8d6406f73a9b22f63053d9c4bf6' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\szp\\app\\views\\RegisterView.tpl',
      1 => 1738397780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679dd85a892d94_80919480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_828500217679dd85a872829_23668760', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_828500217679dd85a872829_23668760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_828500217679dd85a872829_23668760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
	<legend>Register</legend>
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
	<div class="mb-3">
		<label for="id_pass" class="form-label">Retype Password</label>
		<input type="password" class="form-control" name="repass" id="id_pass">
	  </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->mail;?>
">
      </div>
	<button type="submit" class="btn btn-primary">Login</button>
</fieldset>
  </form>




<?php
}
}
/* {/block 'top'} */
}
