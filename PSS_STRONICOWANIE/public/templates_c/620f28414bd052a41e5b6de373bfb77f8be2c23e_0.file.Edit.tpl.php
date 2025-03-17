<?php
/* Smarty version 4.3.4, created on 2025-03-17 15:17:52
  from 'C:\xampp2\htdocs\szp\app\views\Edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d82f101681a1_82798240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '620f28414bd052a41e5b6de373bfb77f8be2c23e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\szp\\app\\views\\Edit.tpl',
      1 => 1738411211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d82f101681a1_82798240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>









<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75289970367d82f0fe596e1_42218953', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_75289970367d82f0fe596e1_42218953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_75289970367d82f0fe596e1_42218953',
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

        <p>Create New Organization</p>
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



        <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dashboard" method="post">
          <input type="text" id="userInputChat" class="form-control" name="search" placeholder="Szukaj Projektu">
          <input type="submit" id="sendMessage" class="btn btn-primary" value="Szukaj">
          </form>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null && (isset($_smarty_tpl->tpl_vars['ActivePro']->value)) && $_smarty_tpl->tpl_vars['ActivePro']->value != null) {?>

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
    

<!--     
    <?php if ((isset($_smarty_tpl->tpl_vars['ActiveOrg']->value)) && $_smarty_tpl->tpl_vars['ActiveOrg']->value != null) {?>
    <p>Working in Organization - <b><?php echo $_smarty_tpl->tpl_vars['ActiveOrg']->value[0]['name'];?>
</b></p>
    <?php }?>


    <?php if ((isset($_smarty_tpl->tpl_vars['ActivePro']->value)) && $_smarty_tpl->tpl_vars['ActivePro']->value != null) {?>
    <p>Working on Project - <b><?php echo $_smarty_tpl->tpl_vars['ActivePro']->value[0]['name'];?>
</b></p>
    <?php }?> -->



          opr <?php echo $_smarty_tpl->tpl_vars['opr']->value;?>




        <?php if ($_smarty_tpl->tpl_vars['opr']->value == 1) {?>
        <div class="container mt-5">
            <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['Operation']->value;?>
</h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editsaveorg" method="post">
    
                <div class="mb-3">
                  <input type="hidden" name="ActiveOrg" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ActiveOrg;?>
">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
                </div>
    
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" ><?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
</textarea>
                </div>

                <div class="mb-3 form-check">
                    
                    <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 1) {?>
                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1" checked>
                    <?php } else { ?>
                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                    <?php }?>
                    <label class="form-check-label" for="status">Is Active</label>
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
              <p class="mb-4"> Organization Owner - <?php echo $_smarty_tpl->tpl_vars['form']->value->CreatedBy;?>
 </p>
              <p class="mb-4"> Established - <?php echo $_smarty_tpl->tpl_vars['form']->value->CreatedAt;?>
 </p>
        </div>
         <?php }?>





         <?php if ($_smarty_tpl->tpl_vars['opr']->value == 2) {?>
         <div class="container mt-5">
          <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['Operation']->value;?>
</h1>
          <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editsavepro" method="post">
  
              <div class="mb-3">
                <input type="hidden" name="ActiveOrg" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ActiveOrg;?>
">
                <input type="hidden" name="ActivePro" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ActivePro;?>
">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
              </div>
  
              <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" ><?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
</textarea>
              </div>

              <div class="mb-3 form-check">
                  
                  <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 1) {?>
                  <input type="checkbox" class="form-check-input" id="status" name="status" value="1" checked>
                  <?php } else { ?>
                  <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                  <?php }?>
                  <label class="form-check-label" for="status">Is Active</label>
              </div>
  
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
            <p class="mb-4"> Created by - <?php echo $_smarty_tpl->tpl_vars['form']->value->CreatedBy;?>
 </p>
            <p class="mb-4"> issued - <?php echo $_smarty_tpl->tpl_vars['form']->value->CreatedAt;?>
 </p>
      </div>
          <?php }?>



          <?php if ($_smarty_tpl->tpl_vars['opr']->value == 3) {?>
          <div class="container mt-5">
            <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['Operation']->value;?>
</h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Editsavetsk" method="post">
    
                <div class="mb-3">
                  
                  <input type="hidden" name="ActiveOrg" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ActiveOrg;?>
">
                  <input type="hidden" name="ActivePro" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ActivePro;?>
">
                  <input type="hidden" name="ActiveTsk" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ActiveTsk;?>
">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
                </div>
    
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" ><?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
</textarea>
                </div>

            <!-- Task Status Field -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 0) {?> selected <?php }?>>Pending</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 1) {?> selected <?php }?>>In Progress</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 2) {?> selected <?php }?>>Completed</option>
                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 3) {?> selected <?php }?>>On Hold</option>
                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 4) {?> selected <?php }?>>Cancelled</option>
                    <option value="5" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 5) {?> selected <?php }?>>Under Review</option>
                    <option value="6" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 6) {?> selected <?php }?>>Archived</option>
                </select>
            </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
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
>

           // Tworzymy instancje offcanvas
    var offcanvasLeft = new bootstrap.Offcanvas(document.getElementById('offcanvasLeft'), {
        backdrop: false // Wyłącza tło (zapobiega zamknięciu po kliknięciu)
    });

    var offcanvasRight = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'), {
        backdrop: false // Wyłącza tło (zapobiega zamknięciu po kliknięciu)
    });

    // Przycisk otwierający lewy panel
    document.getElementById('openLeft').addEventListener('click', function () {
        offcanvasLeft.toggle(); // Zmienia stan lewego panelu (otwiera lub zamyka)
    });

    // Przycisk otwierający prawy panel
    document.getElementById('openRight').addEventListener('click', function () {
        offcanvasRight.toggle(); // Zmienia stan prawego panelu (otwiera lub zamyka)
    });




    // Obsługa Enter w polu tekstowym
    userInputChat.addEventListener("keypress", (e) => {
      if (e.key === "Enter") {
        sendMessage.click();
      }
    });





    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'top'} */
}
