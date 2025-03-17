{extends file="main.tpl"}

{block name=top}

<form action="{$conf->action_root}register" method="post">
	<legend>Register</legend>
	<fieldset>
	<div class="mb-3">
	  <label for="id_login" class="form-label">Login</label>
	  <input type="text" class="form-control" id="id_login" name="login" value="{$form->login}">
	</div>
	<div class="mb-3">
	  <label for="id_pass" class="form-label">Password</label>
	  <input type="password" class="form-control" name="pass" id="id_pass">
	</div>
	<div class="mb-3">
		<label for="id_pass" class="form-label">Retype Password</label>
		<input type="password" class="form-control" name="repass" id="id_pass">
	  </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" value="{$form->mail}">
      </div>
	<button type="submit" class="btn btn-primary">Login</button>
</fieldset>
  </form>




{/block}
