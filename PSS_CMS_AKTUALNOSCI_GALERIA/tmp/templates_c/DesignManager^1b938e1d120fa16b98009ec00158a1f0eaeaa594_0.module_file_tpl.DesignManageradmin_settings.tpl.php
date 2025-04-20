<?php
/* Smarty version 4.5.2, created on 2025-04-20 00:04:56
  from 'module_file_tpl:DesignManager;admin_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_68041e08c40c53_54821925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b938e1d120fa16b98009ec00158a1f0eaeaa594' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_settings.tpl',
      1 => 1745086384,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68041e08c40c53_54821925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp3\\htdocs\\pss\\lib\\plugins\\function.form_start.php','function'=>'smarty_function_form_start',),1=>array('file'=>'C:\\xampp3\\htdocs\\pss\\admin\\plugins\\function.cms_help.php','function'=>'smarty_function_cms_help',),2=>array('file'=>'C:\\xampp3\\htdocs\\pss\\lib\\plugins\\function.form_end.php','function'=>'smarty_function_form_end',),));
echo smarty_function_form_start(array(),$_smarty_tpl);?>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
  </p>
</div>
<fieldset>
  <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_locksettings');?>
:</legend>
  <div class="pageoverflow">
    <p class="pagetext"><label for="locktimeout"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('lock_timeout');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_locktimeout','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('lock_timeout')),$_smarty_tpl);?>
</p>
    <p class="pageinput">
      <input id="locktimeout" type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
lock_timeout" value="<?php echo $_smarty_tpl->tpl_vars['lock_timeout']->value;?>
" size="3" maxlength="3"/>
    </p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext"><label for="lockrefresh"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('lock_refresh');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_lockrefresh','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('lock_refresh')),$_smarty_tpl);?>
</p>
    <p class="pageinput">
      <input id="lockrefresh" type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
lock_refresh" value="<?php echo $_smarty_tpl->tpl_vars['lock_refresh']->value;?>
" size="4" maxlength="4"/>
    </p>
  </div>
</fieldset>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);
}
}
