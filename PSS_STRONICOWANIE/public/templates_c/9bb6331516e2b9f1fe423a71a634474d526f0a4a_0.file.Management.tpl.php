<?php
/* Smarty version 4.3.4, created on 2025-02-01 04:07:23
  from 'C:\xampp2\htdocs\szp\app\views\Management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679d8feb4aff18_86550097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb6331516e2b9f1fe423a71a634474d526f0a4a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\szp\\app\\views\\Management.tpl',
      1 => 1738379126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679d8feb4aff18_86550097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>









<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1883906995679d8feb4a0f35_78802829', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1883906995679d8feb4a0f35_78802829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1883906995679d8feb4a0f35_78802829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




Welcome: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>





  

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
    
        <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null) {?>
         <p>Working in Organization - <b><?php echo $_smarty_tpl->tpl_vars['ActiveOrg']->value[0]['name'];?>
</b></p>
         <?php }?>


         <?php if ((isset($_smarty_tpl->tpl_vars['ActivePro']->value)) && $_smarty_tpl->tpl_vars['ActivePro']->value != null) {?>
         <p>Working on Project - <b><?php echo $_smarty_tpl->tpl_vars['ActivePro']->value[0]['name'];?>
</b></p>
         <?php }?>







 
            <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 80%;">
                <!-- Kafelek Użytkownika -->

                
                <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>





<?php
}
}
/* {/block 'top'} */
}
