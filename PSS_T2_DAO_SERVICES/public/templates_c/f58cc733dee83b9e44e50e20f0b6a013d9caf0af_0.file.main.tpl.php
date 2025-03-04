<?php
/* Smarty version 4.3.4, created on 2025-02-01 03:53:12
  from 'C:\xampp2\htdocs\szp\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679d8c98bcbb40_00748100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58cc733dee83b9e44e50e20f0b6a013d9caf0af' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\szp\\app\\views\\templates\\main.tpl',
      1 => 1738378390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679d8c98bcbb40_00748100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl" data-bs-theme="dark">

<head>
	<meta charset="utf-8"/>
	<title>Project Hub</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
	<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" rel="stylesheet">
</head>

<body class="m-0 p-0" style="margin: 20px;">





	<nav class="navbar sticky-top bg-body-dark m-0 p-0">
		<div class="container-fluid bg-dark">
		  <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
hello">
			<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/logoProjecthub.svg" alt="Logo" width="50" height="auto" class="d-inline-block align-text-top">
		  </a>

			<ul class="nav justify-content-end">
				<?php if ((isset($_smarty_tpl->tpl_vars['admin']->value)) && $_smarty_tpl->tpl_vars['admin']->value == 1) {?>
				<li class="nav-item">
				  <a class="link-light nav-link" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Admin">Admin Panel</a>
				</li>
				<?php }?>	
			  <li class="nav-item">
				<a class="link-light nav-link " aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
hello">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dashboard">Dashboard</a>
			  </li>
			  <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Management">Join Organizations</a>
			  </li>
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Logout</a>
			  </li>
			  <?php } else { ?>	
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Login</a>
			  </li>
			  <?php }?>
			  <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
			  <?php } else { ?>	
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Register</a>
			  </li>
			  <?php }?>
			</ul>
		</div>
	  </nav>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1255892397679d8c98bc1f89_25214472', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1034703633679d8c98bc2916_52421686', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2029067845679d8c98bca790_92717459', 'bottom');
?>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"><?php echo '</script'; ?>
>



<!-- footer -->

<div class="container text-center">
<div class="row p-20">
    <div class="col d-flex align-items-center justify-content-center">
		Author: Marcel Smarczyk
    </div>
    <div class="col d-flex align-items-center justify-content-center">
		All Rights Reserved. 
    </div>
    <div class="col d-flex align-items-center justify-content-center">
		Made with:   <a target="_blank" href="https://www.blender.org/"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/blender_community_badge_black.svg" alt="Logo" width="50" height="auto" class="d-inline-block align-text-top"><img></a>
		<a target="_blank" href="https://github.com/ratchetphp/Ratchet"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/ratchet-php.png" alt="Logo" width="50" height="auto" class="d-inline-block align-text-top"><img></a>
		<a target="_blank" href="https://amelia-framework.eu/"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/amelia-logo.png" alt="Logo" width="auto" height="50" class="d-inline-block align-text-top"><img></a>
    </div>
  </div>
</div>





</body>

</html><?php }
/* {block 'top'} */
class Block_1255892397679d8c98bc1f89_25214472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1255892397679d8c98bc1f89_25214472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_1034703633679d8c98bc2916_52421686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1034703633679d8c98bc2916_52421686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_2029067845679d8c98bca790_92717459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_2029067845679d8c98bca790_92717459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
