
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

                
                {foreach $Organizations as $o}
                {strip}
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{$o.name}</h5>
                                {if $o.idRole eq 9999}
                                <p><a href="#" class="btn btn-sm btn-danger">Waiting</a></p>
                                {else}
                                <p><a href="{$conf->action_root}Managementjoin&organization={$o.id}" class="btn btn-sm btn-success">Join</a></p>    
                                {/if}
                            </div>
                        </div>
                    </div>
                
                {/strip}
                {/foreach}

            </div>





{/block}