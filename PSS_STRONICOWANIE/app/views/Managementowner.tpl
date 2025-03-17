
{extends file="main.tpl"}







{block name=top}



Welcome: {$value}




  

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







 
            <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 80%;">
                <!-- Kafelek Użytkownika -->

                
                {foreach $users as $u}
                {strip}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <form action="{$conf->action_root}Managementownersave" method="post">
                                <input type="hidden" name="organization" value="{$u.idOrg}">
                                <input type="hidden" name="user" value="{$u.idUser}">
                            <h5 class="card-title">Użytkownik: {$u.login}</h5>
                            <div class="mb-3">
                            <label for="idRole" class="form-label">Permissions</label>
                            <select class="form-select" id="idRole" name="idRole">
                                <option value="9999" {if $u.idRole eq 9999} selected {/if}>none</option>
                                <option value="5" {if $u.idRole eq 5} selected {/if}>Project Manager</option>
                                <option value="4" {if $u.idRole eq 4} selected {/if}>Workman</option>
                                <option value="3" {if $u.idRole eq 3} selected {/if}>viewer</option>
                                <option value="9998" {if $u.idRole eq 9999} selected {/if}>Delete</option>
                            </select>
                            </div>
                            <p><button type="submit" class="btn btn-primary">Update</button></p>
                        </form>
                        </div>
                    </div>
                </div>
                
                {/strip}
                {/foreach}

            </div>





{/block}