<?php
/* Smarty version 4.3.4, created on 2025-02-01 13:06:57
  from 'C:\xampp\htdocs\szp\app\views\AdminUsersInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679e0e61a4c717_69263799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '849fe333d183ec5785f0b145f536e17802d362af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szp\\app\\views\\AdminUsersInfo.tpl',
      1 => 1738411575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679e0e61a4c717_69263799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>









<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2114317943679e0e61a3a578_03993001', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_2114317943679e0e61a3a578_03993001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_2114317943679e0e61a3a578_03993001',
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
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">User: <?php echo $_smarty_tpl->tpl_vars['userInfo']->value[0]['login'];?>
</h5>
                                <h5 class="card-title">email: <?php echo $_smarty_tpl->tpl_vars['userInfo']->value[0]['email'];?>
</h5>
                                <h5 class="card-title">CreatedAt: <?php echo $_smarty_tpl->tpl_vars['userInfo']->value[0]['CreatedAt'];?>
</h5>
                                <h5 class="card-title">isActive: <?php echo $_smarty_tpl->tpl_vars['userInfo']->value[0]['isActive'];?>
</h5>
                                
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Admin" class="btn btn-sm btn-primary me-1">Go Back</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Admindelete&user=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value[0]['idUser'];?>
" class="btn btn-sm btn-danger">Usuń</a></p>
                                
                                 </div>
                        </div>
                    </div>
                    
            </div>






<?php
}
}
/* {/block 'top'} */
}
