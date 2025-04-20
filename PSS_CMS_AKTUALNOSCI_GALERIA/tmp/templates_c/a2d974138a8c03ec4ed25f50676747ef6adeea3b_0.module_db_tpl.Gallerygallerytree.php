<?php
/* Smarty version 4.5.2, created on 2025-04-21 00:18:03
  from 'module_db_tpl:Gallery;gallerytree' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6805729b976784_30064149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2d974138a8c03ec4ed25f50676747ef6adeea3b' => 
    array (
      0 => 'module_db_tpl:Gallery;gallerytree',
      1 => 1745088097,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6805729b976784_30064149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp3\\htdocs\\pss\\lib\\plugins\\function.repeat.php','function'=>'smarty_function_repeat',),));
?>
<ul>
<?php $_smarty_tpl->_assignInScope('g_prevdepth', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'img', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index']++;
?>

<?php if ($_smarty_tpl->tpl_vars['image']->value->depth > $_smarty_tpl->tpl_vars['g_prevdepth']->value) {
echo smarty_function_repeat(array('string'=>"<ul>",'times'=>$_smarty_tpl->tpl_vars['image']->value->depth-$_smarty_tpl->tpl_vars['g_prevdepth']->value),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['image']->value->depth < $_smarty_tpl->tpl_vars['g_prevdepth']->value) {
echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['g_prevdepth']->value-$_smarty_tpl->tpl_vars['image']->value->depth),$_smarty_tpl);?>

</li>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_img']->value['index'] : null) > 0) {?></li>
<?php }?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" /></a> <?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>


<?php $_smarty_tpl->_assignInScope('g_prevdepth', $_smarty_tpl->tpl_vars['image']->value->depth);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['image']->value->depth-1),$_smarty_tpl);?>
</li>
	</ul><?php }
}
