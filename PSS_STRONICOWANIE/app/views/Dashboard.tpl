
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

        <p><a class="custom-link" href="{$conf->action_root}Editorg">Create New Organization</a></p>
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



        {if isset($ActiveOrg) && $ActiveOrg ne null && $tsks eq null}
        <form action="{$conf->action_root}dashboard" method="post">
          <input type="text" id="userInputChat" class="form-control" name="search" placeholder="Szukaj Projektu">
          <input type="submit" id="sendMessage" class="btn btn-primary" value="Szukaj">
          </form>
        {/if}

        {if isset($ActiveOrg) && $ActiveOrg ne null &&  isset($ActivePro) && $ActivePro ne null && isset($tsks)}
        <form action="{$conf->action_root}dashboard" method="post">
          <input type="text" id="userInputChat" class="form-control" name="search" placeholder="Szukaj Zadania">
          <input type="submit" id="sendMessage" class="btn btn-primary" value="Szukaj">
          </form>
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
    
        {if isset($ActiveOrg) && $ActiveOrg ne null}
         <p>Working in Organization - <b>{$ActiveOrg[0]['name']}</b></p>
         {/if}


         {if isset($ActivePro) && $ActivePro ne null}
         <p>Working on Project - <b>{$ActivePro[0]['name']}</b></p>
         {/if}







    <div class="container my-5">
        <!-- Flex container with wrapping for projects -->
        <div class="row d-flex flex-wrap justify-content-start">

          {if isset($ActiveOrg) && $ActiveOrg ne null && isset($ActivePro) && $ActivePro ne null && !isset($ActiveTsk) && $ActiveTsk eq null}
          {if $tsks eq null}
          Brak Zadań
        {else}
            {foreach $tsks as $t}
                {strip}

                <div class="container py-4">
                  <div class="row g-3">
                          <div class="col-md-4">
                              <a class="custom-link" href="#">
                                  <div class="card position-relative">
                                      <div class="card-body">
                                          <p class="card-text">Zadanie</p>
                                          <h5 class="card-title">{$t["name"]}</h5>
                                          <p class="card-text">{$t["description"]}</p>
                                          <!--<p class="card-text text-muted"><small>Właściciel: Jan Kowalski</small></p>-->
                                          <div class="position-absolute top-0 end-0 mt-2 me-2">
                                              <a href="{$conf->action_root}Edittsk&ActivePro={$t.idPro}&ActiveTsk={$t.id}&ActiveOrg={$t.idOrg}" class="btn btn-sm btn-primary me-1">Edit</a>
                                              <a href="{$conf->action_root}Editdeletetsk&ActivePro={$t.idPro}&ActiveTsk={$t.id}&ActiveOrg={$t.idOrg}" class="btn btn-sm btn-danger">Delete</a>
                                            <p> status - 
                                                  {if $t["status"] eq 0} Pending {/if}
                                                  {if $t["status"] eq 1} In Progress {/if}
                                                  {if $t["status"] eq 2} Completed {/if}
                                                  {if $t["status"] eq 3} On Hold {/if}
                                                  {if $t["status"] eq 4} Cancelled {/if}
                                                  {if $t["status"] eq 5} Under Review {/if}
                                                  {if $t["status"] eq 6} Archived {/if}
                                                </p>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div>
                  </div>
              </div>


                {/strip}
            {/foreach}
            {/if}
            {/if}


            {if isset($ActiveOrg) && $ActiveOrg ne null && !isset($ActivePro) && $ActivePro eq null}
              {if $pros eq null}
                Brak Projektów
              {else}
                    {foreach $pros as $pr}
                        {strip}
                        <div class="container py-4">
                          <div class="row g-3">
                                  <div class="col-md-4">
                                      <a class="custom-link" href="{$conf->action_root}dashboard&idOrg={$pr.idOrg}&idPro={$pr.id}&page=0">
                                          <div class="card position-relative">
                                              <div class="card-body">
                                                <p class="card-text">Projekt</p>
                                                  <h5 class="card-title">{$pr["name"]}</h5>
                                                  <p class="card-text">{$pr["description"]}</p>
                                                  <!--<p class="card-text text-muted"><small>Właściciel: Jan Kowalski</small></p>-->
                                                  <div class="position-absolute top-0 end-0 mt-2 me-2">

                                                      <a href="{$conf->action_root}Editpro&ActiveOrg={$pr.idOrg}&ActivePro={$pr.id}" class="btn btn-sm btn-primary me-1">Edit</a>
                                                      <a href="{$conf->action_root}Editdeletepro&ActivePro={$pr.id}&ActiveOrg={$pr.idOrg}" class="btn btn-sm btn-danger">Delete</a>
                                                      {if $pr["isActive"] eq 1}
                                                          <a href="#" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            Active</a>
                                                      {else}
                                                          <a href="#" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            Inactive</a>
                                                      {/if}
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                          </div>
                      </div>
                        {/strip}
                    {/foreach}
                    {/if}
                      {/if}



                        {if !isset($ActiveOrg) && $ActiveOrg eq null}
                        {if $orgs eq null}
                        Brak Organizacji
                      {else}

                            {foreach $orgs as $o}
                                {strip}

                                <div class="container py-4">
                                  <div class="row g-3">
                                          <div class="col-md-4">
                                              <a class="custom-link" href="{$conf->action_root}dashboard&idOrg={$o.id}&page=0">
                                                  <div class="card position-relative">
                                                      <div class="card-body">
                                                        <p class="card-text">Organizacja</p>
                                                          <h5 class="card-title">{$o["name"]}</h5>
                                                          <p class="card-text">{$o["description"]}</p>
                                                          <p class="card-text"> Organization Owner - {$o["nzw_w"]} </p>
                                                          <p class="card-text"> Established - {$o["CreatedAt"]} </p>
                                                          <!--<p class="card-text text-muted"><small>Właściciel: Jan Kowalski</small></p>-->
                                                          <div class="position-absolute top-0 end-0 mt-2 me-2">
                                                            <a href="{$conf->action_root}Managementowner&organization={$o.id}" class="btn btn-sm btn-secondary">
                                                              <i class="bi bi-person"></i> Users To Accept
                                                              <span class="badge bg-danger">
                                                                {if $o.waitUsers ne null} 
                                                                {$o.waitUsers} 
                                                                {else} 
                                                                0 
                                                                {/if}

                                                              </span>
                                                          </a>
                                                              <a href="{$conf->action_root}Editorg&ActiveOrg={$o.id}" class="btn btn-sm btn-primary me-1">Edit</a>
                                                              <a href="{$conf->action_root}Editdeleteorg&ActiveOrg={$o.id}" class="btn btn-sm btn-danger">Delete</a>
                                                          </div>

                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                  </div>
                              </div>

                                {/strip}
                            {/foreach}
                            {/if}
                            {/if}




          <!-- Project 1 -->

      
        </div>
      </div>



      {if !isset($ActiveOrg) && $ActiveOrg eq null}
      <a href="{$conf->action_root}Editorg" class="add-project-btn">
         <i class="bi bi-plus">+</i>
       </a>
       {/if}

       {if isset($ActiveOrg) && $ActiveOrg ne null && !isset($ActivePro) && $ActivePro eq null}
       <a href="{$conf->action_root}Editpro&ActiveOrg={$ActiveOrg[0]['id']}" class="add-project-btn">
         <i class="bi bi-plus">+</i>
       </a>
       {/if}

       {if isset($ActiveOrg) && $ActiveOrg ne null && isset($ActivePro) && $ActivePro ne null && !isset($ActiveTsk) && $ActiveTsk eq null}
       <a href="{$conf->action_root}Edittsk&ActiveOrg={$ActiveOrg[0]['id']}&ActivePro={$ActivePro[0]['id']}" class="add-project-btn">
         <i class="bi bi-plus">+</i>
       </a>
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
  
  <div style="justify-content: center; text-align: center;">
 
    {if !isset($ActiveOrg) && $ActiveOrg eq null}
      {if $page ne 1}<a class="custom-link" href="{$conf->action_root}dashboard&page={$page-1}&search={$search}">	&lt;</a><a class="custom-link" href="{$conf->action_root}dashboard&page={1}&search={$search}">1</a> ... {/if}
      {$page} ...  <a class="custom-link" href="{$conf->action_root}dashboard&page={$lastpage}&search={$search}">{$lastpage}</a> 
      {if $page neq $lastpage}
      <a class="custom-link" href="{$conf->action_root}dashboard&page={$page+1}&search={$search}">	&gt;</a>
      {/if}
    {/if}
  
    {if isset($ActiveOrg) && $ActiveOrg ne null && !isset($ActivePro) && $ActivePro eq null}
          
          {if $page ne 1}<a class="custom-link" href="{$conf->action_root}dashboard&page={$page-1}&idOrg={$ActiveOrg[0]['id']}">	&lt;</a><a class="custom-link" href="{$conf->action_root}dashboard&page={1}&idOrg={$ActiveOrg}">1</a> ... {/if}
          {$page} ...  <a class="custom-link" href="{$conf->action_root}dashboard&page={$lastpage}&idOrg={$ActiveOrg[0]['id']}">{$lastpage}</a> 
          {if $page neq $lastpage}
          <a class="custom-link" href="{$conf->action_root}dashboard&page={$page+1}&idOrg={$ActiveOrg[0]['id']}">	&gt;</a>
          {/if}
      {/if}
  
    {if isset($ActiveOrg) && $ActiveOrg ne null && isset($ActivePro) && $ActivePro ne null && !isset($ActiveTsk) && $ActiveTsk eq null}
                  {if $page ne 1}<a class="custom-link" href="{$conf->action_root}dashboard&page={$page-1}&idOrg={$ActiveOrg[0]['id']}&idPro={$ActivePro[0]['id']}">	&lt;</a><a class="custom-link" href="{$conf->action_root}dashboard&page={1}&idOrg={$ActiveOrg[0]['id']}&idPro={$ActivePro[0]['id']}">1</a> ... {/if}
                  {$page} ...  <a class="custom-link" href="{$conf->action_root}dashboard&page={$lastpage}&idOrg={$ActiveOrg[0]['id']}&idPro={$ActivePro[0]['id']}">{$lastpage}</a> 
                  {if $page neq $lastpage}
                  <a class="custom-link" href="{$conf->action_root}dashboard&page={$page+1}&idOrg={$ActiveOrg[0]['id']}&idPro={$ActivePro[0]['id']}">	&gt;</a>
                  {/if}
      {/if}
  
  
    

  </div>









	<script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>


{/block}