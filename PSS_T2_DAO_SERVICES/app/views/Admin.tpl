
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
                                <h5 class="card-title">Użytkownik: {$u.login}</h5>
                                <p>
                                <a href="{$conf->action_root}Admininfo&user={$u.idUser}" class="btn btn-sm btn-success">Info</a><a href="{$conf->action_root}Admindelete&user={$u.idUser}" class="btn btn-sm btn-danger">Usuń</a></p>
                            </div>
                        </div>
                    </div>
                
                {/strip}
                {/foreach}

            </div>





{/block}