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