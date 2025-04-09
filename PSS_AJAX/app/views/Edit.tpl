
{extends file="main.tpl"}







{block name=top}



Welcome: {$value}


<!-- Lewy panel -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasLeftLabel"><a class="custom-link" href="{$conf->action_root}dashboard">Organizations</a></h5>
    </div>
    <div class="offcanvas-body">
        {foreach $orgs as $o}
        {strip}

        <p>

        <a class="custom-link" href="{$conf->action_root}dashboard&idOrg={$o.id}">{$o.name}</a>  
        </p>
        {/strip}
        {/foreach}

        <p>Create New Organization</p>
    </div>
  </div>
  
  <!-- Prawy panel -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">

    </div>
    <div class="offcanvas-body">
        
      <div class="input-group">


        {if !(isset($ActiveOrg)) && $ActiveOrg eq null}
        <form action="{$conf->action_root}dashboard" method="post">
        <input type="text" id="userInputChat" class="form-control" name="search" placeholder="Szukaj Organizacji">
        <input type="submit" id="sendMessage" class="btn btn-primary" value="Szukaj">
        </form>
        {/if}



        {if isset($ActiveOrg) && $ActiveOrg ne null}
        <form action="{$conf->action_root}dashboard" method="post">
          <input type="text" id="userInputChat" class="form-control" name="search" placeholder="Szukaj Projektu">
          <input type="submit" id="sendMessage" class="btn btn-primary" value="Szukaj">
          </form>
        {/if}

        {if isset($ActiveOrg) && $ActiveOrg ne null &&  isset($ActivePro) && $ActivePro ne null}

        {/if}
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
  

    {if $msgs->isInfo()}
        <ul>
        {foreach $msgs->getMessages() as $msg}
            <li>{$msg->text}</li>
        {/foreach}
        </ul>
    {/if}
    

<!--     
    {if isset($ActiveOrg) && $ActiveOrg ne null}
    <p>Working in Organization - <b>{$ActiveOrg[0]['name']}</b></p>
    {/if}


    {if isset($ActivePro) && $ActivePro ne null}
    <p>Working on Project - <b>{$ActivePro[0]['name']}</b></p>
    {/if} -->



          opr {$opr}



        {if $opr eq 1}
        <div class="container mt-5">
            <h1 class="mb-4">{$Operation}</h1>
            <form action="{$conf->action_root}Editsaveorg" method="post">
    
                <div class="mb-3">
                  <input type="hidden" name="ActiveOrg" value="{$form->ActiveOrg}">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{$form->name}">
                </div>
    
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" >{$form->description}</textarea>
                </div>

                <div class="mb-3 form-check">
                    
                    {if $form->status eq 1}
                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1" checked>
                    {else}
                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                    {/if}
                    <label class="form-check-label" for="status">Is Active</label>
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
              <p class="mb-4"> Organization Owner - {$form->CreatedBy} </p>
              <p class="mb-4"> Established - {$form->CreatedAt} </p>
        </div>
         {/if}





         {if $opr eq 2}
         <div class="container mt-5">
          <h1 class="mb-4">{$Operation}</h1>
          <form action="{$conf->action_root}Editsavepro" method="post">
  
              <div class="mb-3">
                <input type="hidden" name="ActiveOrg" value="{$form->ActiveOrg}">
                <input type="hidden" name="ActivePro" value="{$form->ActivePro}">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{$form->name}">
              </div>
  
              <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" >{$form->description}</textarea>
              </div>

              <div class="mb-3 form-check">
                  
                  {if $form->status eq 1}
                  <input type="checkbox" class="form-check-input" id="status" name="status" value="1" checked>
                  {else}
                  <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                  {/if}
                  <label class="form-check-label" for="status">Is Active</label>
              </div>
  
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
            <p class="mb-4"> Created by - {$form->CreatedBy} </p>
            <p class="mb-4"> issued - {$form->CreatedAt} </p>
      </div>
          {/if}



          {if $opr eq 3}
          <div class="container mt-5">
            <h1 class="mb-4">{$Operation}</h1>
            <form action="{$conf->action_root}Editsavetsk" method="post">
    
                <div class="mb-3">
                  
                  <input type="hidden" name="ActiveOrg" value="{$form->ActiveOrg}">
                  <input type="hidden" name="ActivePro" value="{$form->ActivePro}">
                  <input type="hidden" name="ActiveTsk" value="{$form->ActiveTsk}">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{$form->name}">
                </div>
    
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" >{$form->description}</textarea>
                </div>

            <!-- Task Status Field -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="0" {if $form->status eq 0} selected {/if}>Pending</option>
                    <option value="1" {if $form->status eq 1} selected {/if}>In Progress</option>
                    <option value="2" {if $form->status eq 2} selected {/if}>Completed</option>
                    <option value="3" {if $form->status eq 3} selected {/if}>On Hold</option>
                    <option value="4" {if $form->status eq 4} selected {/if}>Cancelled</option>
                    <option value="5" {if $form->status eq 5} selected {/if}>Under Review</option>
                    <option value="6" {if $form->status eq 6} selected {/if}>Archived</option>
                </select>
            </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
           {/if}













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








    <script>

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





    </script>
{/block}