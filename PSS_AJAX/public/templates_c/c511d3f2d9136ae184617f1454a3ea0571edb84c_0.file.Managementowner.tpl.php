<?php
/* Smarty version 4.3.4, created on 2025-02-01 05:58:37
  from 'C:\xampp2\htdocs\szp\app\views\Managementowner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679da9fd077fd6_25572852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c511d3f2d9136ae184617f1454a3ea0571edb84c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\szp\\app\\views\\Managementowner.tpl',
      1 => 1738385912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679da9fd077fd6_25572852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>









<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_546563124679da9fcf15753_16177078', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_546563124679da9fcf15753_16177078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_546563124679da9fcf15753_16177078',
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                <div class="col"><div class="card h-100 shadow-sm"><div class="card-body"><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Managementownersave" method="post"><input type="hidden" name="organization" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['idOrg'];?>
"><input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
"><h5 class="card-title">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['u']->value['login'];?>
</h5><div class="mb-3"><label for="idRole" class="form-label">Permissions</label><select class="form-select" id="idRole" name="idRole"><option value="9999" <?php if ($_smarty_tpl->tpl_vars['u']->value['idRole'] == 9999) {?> selected <?php }?>>none</option><option value="5" <?php if ($_smarty_tpl->tpl_vars['u']->value['idRole'] == 5) {?> selected <?php }?>>Project Manager</option><option value="4" <?php if ($_smarty_tpl->tpl_vars['u']->value['idRole'] == 4) {?> selected <?php }?>>Workman</option><option value="3" <?php if ($_smarty_tpl->tpl_vars['u']->value['idRole'] == 3) {?> selected <?php }?>>viewer</option><option value="9998" <?php if ($_smarty_tpl->tpl_vars['u']->value['idRole'] == 9999) {?> selected <?php }?>>Delete</option></select></div><p><button type="submit" class="btn btn-primary">Update</button></p></form></div></div></div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>





<?php
}
}
/* {/block 'top'} */
}
