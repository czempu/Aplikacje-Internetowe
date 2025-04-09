<?php
/* Smarty version 4.3.4, created on 2025-02-01 11:59:30
  from 'C:\xampp\htdocs\szp\app\views\Dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679dfe92f32987_34008411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a37865967d1a2a7b87468f8f4f7f69dcbb35d0c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szp\\app\\views\\Dashboard.tpl',
      1 => 1738396074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679dfe92f32987_34008411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>









<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_642255812679dfe92ef45d5_16907613', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_642255812679dfe92ef45d5_16907613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_642255812679dfe92ef45d5_16907613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




Welcome: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>



<!-- Lewy panel -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasLeftLabel"><a class="custom-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dashboard">Organizations</a></h5>
    </div>
    <div class="offcanvas-body">
      

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orgs']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
        <p><a class="custom-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dashboard&idOrg=<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['o']->value['name'];?>
</a></p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <p><a class="custom-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editorg">Create New Organization</a></p>
    </div>
  </div>
  
  <!-- Prawy panel -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">

    </div>
    <div class="offcanvas-body">
        
      <div class="input-group">


        <?php if (!((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value))) && $_smarty_tpl->tpl_vars['ActiveOrg']->value == null) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dashboard" method="post">
        <input type="text" id="userInputChat" class="form-control" name="search" placeholder="Szukaj Organizacji">
        <input type="submit" id="sendMessage" class="btn btn-primary" value="Szukaj">
        </form>
        <?php }?>



        <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null && $_smarty_tpl->tpl_vars['tsks']->value == null) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dashboard" method="post">
          <input type="text" id="userInputChat" class="form-control" name="search" placeholder="Szukaj Projektu">
          <input type="submit" id="sendMessage" class="btn btn-primary" value="Szukaj">
          </form>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null && (isset($_smarty_tpl->tpl_vars['ActivePro']->value)) && $_smarty_tpl->tpl_vars['ActivePro']->value != null && (isset($_smarty_tpl->tpl_vars['tsks']->value))) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dashboard" method="post">
          <input type="text" id="userInputChat" class="form-control" name="search" placeholder="Szukaj Zadania">
          <input type="submit" id="sendMessage" class="btn btn-primary" value="Szukaj">
          </form>
        <?php }?>
      </div>
    </div>
  </div>
  
  <!-- Przycisk do otwierania lewego panelu -->
  <button class="btn-open-left" type="button" id="openLeft">
    &#x2190;
  </button>
  
  <!-- Przycisk do otwierania prawego panelu -->
  <button class="btn-open-right" type="button" id="openRight">
    &#x2192;
  </button>
  

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







    <div class="container my-5">
        <!-- Flex container with wrapping for projects -->
        <div class="row d-flex flex-wrap justify-content-start">

          <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null && (isset($_smarty_tpl->tpl_vars['ActivePro']->value)) && $_smarty_tpl->tpl_vars['ActivePro']->value != null && !(isset($_smarty_tpl->tpl_vars['ActiveTsk']->value)) && $_smarty_tpl->tpl_vars['ActiveTsk']->value == null) {?>
          <?php if ($_smarty_tpl->tpl_vars['tsks']->value == null) {?>
          Brak Zadań
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tsks']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                <div class="container py-4"><div class="row g-3"><div class="col-md-4"><a class="custom-link" href="#"><div class="card position-relative"><div class="card-body"><p class="card-text">Zadanie</p><h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['t']->value["name"];?>
</h5><p class="card-text"><?php echo $_smarty_tpl->tpl_vars['t']->value["description"];?>
</p><!--<p class="card-text text-muted"><small>Właściciel: Jan Kowalski</small></p>--><div class="position-absolute top-0 end-0 mt-2 me-2"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Edittsk&ActivePro=<?php echo $_smarty_tpl->tpl_vars['t']->value['idPro'];?>
&ActiveTsk=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
&ActiveOrg=<?php echo $_smarty_tpl->tpl_vars['t']->value['idOrg'];?>
" class="btn btn-sm btn-primary me-1">Edit</a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editdeletetsk&ActivePro=<?php echo $_smarty_tpl->tpl_vars['t']->value['idPro'];?>
&ActiveTsk=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
&ActiveOrg=<?php echo $_smarty_tpl->tpl_vars['t']->value['idOrg'];?>
" class="btn btn-sm btn-danger">Delete</a><p> status -<?php if ($_smarty_tpl->tpl_vars['t']->value["status"] == 0) {?> Pending <?php }
if ($_smarty_tpl->tpl_vars['t']->value["status"] == 1) {?> In Progress <?php }
if ($_smarty_tpl->tpl_vars['t']->value["status"] == 2) {?> Completed <?php }
if ($_smarty_tpl->tpl_vars['t']->value["status"] == 3) {?> On Hold <?php }
if ($_smarty_tpl->tpl_vars['t']->value["status"] == 4) {?> Cancelled <?php }
if ($_smarty_tpl->tpl_vars['t']->value["status"] == 5) {?> Under Review <?php }
if ($_smarty_tpl->tpl_vars['t']->value["status"] == 6) {?> Archived <?php }?></p></div></div></div></a></div></div></div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php }?>


            <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null && !(isset($_smarty_tpl->tpl_vars['ActivePro']->value)) && $_smarty_tpl->tpl_vars['ActivePro']->value == null) {?>
              <?php if ($_smarty_tpl->tpl_vars['pros']->value == null) {?>
                Brak Projektów
              <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pros']->value, 'pr');
$_smarty_tpl->tpl_vars['pr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pr']->value) {
$_smarty_tpl->tpl_vars['pr']->do_else = false;
?>
                        <div class="container py-4"><div class="row g-3"><div class="col-md-4"><a class="custom-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dashboard&idOrg=<?php echo $_smarty_tpl->tpl_vars['pr']->value['idOrg'];?>
&idPro=<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
"><div class="card position-relative"><div class="card-body"><p class="card-text">Projekt</p><h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['pr']->value["name"];?>
</h5><p class="card-text"><?php echo $_smarty_tpl->tpl_vars['pr']->value["description"];?>
</p><!--<p class="card-text text-muted"><small>Właściciel: Jan Kowalski</small></p>--><div class="position-absolute top-0 end-0 mt-2 me-2"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editpro&ActiveOrg=<?php echo $_smarty_tpl->tpl_vars['pr']->value['idOrg'];?>
&ActivePro=<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" class="btn btn-sm btn-primary me-1">Edit</a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editdeletepro&ActivePro=<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
&ActiveOrg=<?php echo $_smarty_tpl->tpl_vars['pr']->value['idOrg'];?>
" class="btn btn-sm btn-danger">Delete</a><?php if ($_smarty_tpl->tpl_vars['pr']->value["isActive"] == 1) {?><a href="#" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Active</a><?php } else { ?><a href="#" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Inactive</a><?php }?></div></div></div></a></div></div></div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                      <?php }?>



                        <?php if (!(isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value == null) {?>
                        <?php if ($_smarty_tpl->tpl_vars['orgs']->value == null) {?>
                        Brak Organizacji
                      <?php } else { ?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orgs']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
                                <div class="container py-4"><div class="row g-3"><div class="col-md-4"><a class="custom-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dashboard&idOrg=<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
"><div class="card position-relative"><div class="card-body"><p class="card-text">Organizacja</p><h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['o']->value["name"];?>
</h5><p class="card-text"><?php echo $_smarty_tpl->tpl_vars['o']->value["description"];?>
</p><p class="card-text"> Organization Owner - <?php echo $_smarty_tpl->tpl_vars['o']->value["nzw_w"];?>
 </p><p class="card-text"> Established - <?php echo $_smarty_tpl->tpl_vars['o']->value["CreatedAt"];?>
 </p><!--<p class="card-text text-muted"><small>Właściciel: Jan Kowalski</small></p>--><div class="position-absolute top-0 end-0 mt-2 me-2"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Managementowner&organization=<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" class="btn btn-sm btn-secondary"><i class="bi bi-person"></i> Users To Accept<span class="badge bg-danger"><?php if ($_smarty_tpl->tpl_vars['o']->value['waitUsers'] != null) {
echo $_smarty_tpl->tpl_vars['o']->value['waitUsers'];
} else { ?>0<?php }?></span></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editorg&ActiveOrg=<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" class="btn btn-sm btn-primary me-1">Edit</a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editdeleteorg&ActiveOrg=<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" class="btn btn-sm btn-danger">Delete</a></div></div></div></a></div></div></div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            <?php }?>




          <!-- Project 1 -->

      
        </div>
      </div>



      <?php if (!(isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value == null) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editorg" class="add-project-btn">
         <i class="bi bi-plus">+</i>
       </a>
       <?php }?>

       <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null && !(isset($_smarty_tpl->tpl_vars['ActivePro']->value)) && $_smarty_tpl->tpl_vars['ActivePro']->value == null) {?>
       <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editpro&ActiveOrg=<?php echo $_smarty_tpl->tpl_vars['ActiveOrg']->value[0]['id'];?>
" class="add-project-btn">
         <i class="bi bi-plus">+</i>
       </a>
       <?php }?>

       <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null && (isset($_smarty_tpl->tpl_vars['ActivePro']->value)) && $_smarty_tpl->tpl_vars['ActivePro']->value != null && !(isset($_smarty_tpl->tpl_vars['ActiveTsk']->value)) && $_smarty_tpl->tpl_vars['ActiveTsk']->value == null) {?>
       <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Edittsk&ActiveOrg=<?php echo $_smarty_tpl->tpl_vars['ActiveOrg']->value[0]['id'];?>
&ActivePro=<?php echo $_smarty_tpl->tpl_vars['ActivePro']->value[0]['id'];?>
" class="add-project-btn">
         <i class="bi bi-plus">+</i>
       </a>
         <?php }?>

         
<!-- Modal for project details -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectModalLabel">Project Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="projectDescription"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'top'} */
}
