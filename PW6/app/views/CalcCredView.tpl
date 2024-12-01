{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}calcShow"  class="pure-menu-heading pure-menu-link">Kalkulator Prosty</a>
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCredCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="KwotaKredytu">Kwota Kredytu</label>
		    <input id="KwotaKredytu" type="text" placeholder="Kwota Kredytu" name="KwotaKredytu" value="{$form->KwotaKredytu}">
		</div>
        <div class="pure-control-group">
			<label for="Oprocentowanie">Oprocentowanie</label>
		    <input id="Oprocentowanie" type="text" placeholder="Oprocentowanie" name="Oprocentowanie" value="{$form->Oprocentowanie}">
		</div>
        <div class="pure-control-group">
		    <label for="Lata">Lata</label>
		    <input id="Lata" type="text" placeholder="Lata" name="Lata" value="{$form->Lata}">
		</div>
		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}