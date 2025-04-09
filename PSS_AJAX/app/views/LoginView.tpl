{extends file="main.tpl"}

{block name=top}

<form action="{$conf->action_root}login" method="post">
	<legend>Logowanie do systemu</legend>
	<fieldset>
	<div class="mb-3">
	  <label for="id_login" class="form-label">Login</label>
	  <input type="text" class="form-control" id="id_login" name="login" value="{$form->login}">
	</div>
	<div class="mb-3">
	  <label for="id_pass" class="form-label">Password</label>
	  <input type="password" class="form-control" name="pass" id="id_pass">
	</div>
	<button type="submit" class="btn btn-primary">Login</button>
</fieldset>
  </form>




{/block}
