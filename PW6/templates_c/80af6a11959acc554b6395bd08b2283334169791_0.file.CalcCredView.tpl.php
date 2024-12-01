<?php
/* Smarty version 3.1.30, created on 2024-12-01 13:00:38
  from "C:\xampp\htdocs\x\app\views\CalcCredView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_674c4fe6039743_63926475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80af6a11959acc554b6395bd08b2283334169791' => 
    array (
      0 => 'C:\\xampp\\htdocs\\x\\app\\views\\CalcCredView.tpl',
      1 => 1733054271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_674c4fe6039743_63926475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1300036920674c4fe6039325_09170149', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1300036920674c4fe6039325_09170149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow"  class="pure-menu-heading pure-menu-link">Kalkulator Prosty</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCredCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="KwotaKredytu">Kwota Kredytu</label>
		    <input id="KwotaKredytu" type="text" placeholder="Kwota Kredytu" name="KwotaKredytu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->KwotaKredytu;?>
">
		</div>
        <div class="pure-control-group">
			<label for="Oprocentowanie">Oprocentowanie</label>
		    <input id="Oprocentowanie" type="text" placeholder="Oprocentowanie" name="Oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Oprocentowanie;?>
">
		</div>
        <div class="pure-control-group">
		    <label for="Lata">Lata</label>
		    <input id="Lata" type="text" placeholder="Lata" name="Lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Lata;?>
">
		</div>
		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
