<?php
/* Smarty version 4.3.4, created on 2025-02-01 13:07:33
  from 'C:\xampp\htdocs\szp\app\views\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679e0e85b99ca5_54336627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b10d239c7fe655c87a7fbdde0584352a6d26552d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szp\\app\\views\\Admin.tpl',
      1 => 1738411651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679e0e85b99ca5_54336627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>









<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_890953304679e0e85ad7881_86731467', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_890953304679e0e85ad7881_86731467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_890953304679e0e85ad7881_86731467',
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
                <div class="col"><div class="card h-100 shadow-sm"><div class="card-body"><h5 class="card-title">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['u']->value['login'];?>
</h5><p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Admininfo&user=<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
" class="btn btn-sm btn-success">Info</a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Admindelete&user=<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
" class="btn btn-sm btn-danger">Usuń</a></p></div></div></div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>





<?php
}
}
/* {/block 'top'} */
}
