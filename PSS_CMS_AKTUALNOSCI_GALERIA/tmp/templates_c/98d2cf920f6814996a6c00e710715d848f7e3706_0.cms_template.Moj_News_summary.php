<?php
/* Smarty version 4.5.2, created on 2025-04-20 21:53:45
  from 'cms_template:Moj_News_summary' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_680550c9debc16_57468532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d2cf920f6814996a6c00e710715d848f7e3706' => 
    array (
      0 => 'cms_template:Moj_News_summary',
      1 => '1745178824',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680550c9debc16_57468532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp3\\htdocs\\pss\\lib\\plugins\\modifier.cms_escape.php','function'=>'smarty_modifier_cms_escape',),1=>array('file'=>'C:\\xampp3\\htdocs\\pss\\lib\\plugins\\modifier.cms_date_format.php','function'=>'smarty_modifier_cms_date_format',),));
?>
<div class="news-cards-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
<div class="news-card">

  <div class="news-card-header">
    <h3 class="news-title">
      <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
">
        <?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>

      </a>
    </h3>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
      <p class="news-date"><?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>
</p>
    <?php }?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
    <div class="news-summary">
      <?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

    </div>

  <?php }?>

  <div class="news-footer">
    <span class="news-category"><?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>
</span>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->author) {?>
      <span class="news-author">• <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>
</span>
    <?php }?>
    <span class="news-morelink">[<?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
]</span>
  </div>

</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<center>
<?php if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
  <p>
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {
echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
<?php }
echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

<?php }?>
</p>
<?php }?>
</center><?php }
}
