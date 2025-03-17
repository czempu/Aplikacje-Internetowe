<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl" data-bs-theme="dark">

<head>
	<meta charset="utf-8"/>
	<title>Project Hub</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>
	<link href="{$conf->app_url}/css/style.css" rel="stylesheet">
</head>

<body class="m-0 p-0" style="margin: 20px;">





	<nav class="navbar sticky-top bg-body-dark m-0 p-0">
		<div class="container-fluid bg-dark">
		  <a class="navbar-brand" href="{$conf->action_root}hello">
			<img src="{$conf->app_url}/img/logoProjecthub.svg" alt="Logo" width="50" height="auto" class="d-inline-block align-text-top">
		  </a>

			<ul class="nav justify-content-end">
				{if isset($admin) && $admin eq 1}
				<li class="nav-item">
				  <a class="link-light nav-link" aria-current="page" href="{$conf->action_root}Admin">Admin Panel</a>
				</li>
				{/if}	
			  <li class="nav-item">
				<a class="link-light nav-link " aria-current="page" href="{$conf->action_root}hello">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="{$conf->action_root}dashboard">Dashboard</a>
			  </li>
			  {if count($conf->roles)>0}
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="{$conf->action_root}Management">Join Organizations</a>
			  </li>
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="{$conf->action_root}logout">Logout</a>
			  </li>
			  {else}	
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="{$conf->action_root}loginShow">Login</a>
			  </li>
			  {/if}
			  {if count($conf->roles)>0}
			  {else}	
			  <li class="nav-item">
				<a class="link-light nav-link" aria-current="page" href="{$conf->action_root}register">Register</a>
			  </li>
			  {/if}
			</ul>
		</div>
	  </nav>




{block name=top} {/block}

{block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

{block name=bottom} {/block}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<!-- footer -->

<div class="container text-center">
<div class="row p-20">
    <div class="col d-flex align-items-center justify-content-center">
		Author: Marcel Smarczyk
    </div>
    <div class="col d-flex align-items-center justify-content-center">
		All Rights Reserved. 
    </div>
    <div class="col d-flex align-items-center justify-content-center">
		Made with:   <a target="_blank" href="https://www.blender.org/"><img src="{$conf->app_url}/img/blender_community_badge_black.svg" alt="Logo" width="50" height="auto" class="d-inline-block align-text-top"><img></a>
		<a target="_blank" href="https://github.com/ratchetphp/Ratchet"><img src="{$conf->app_url}/img/ratchet-php.png" alt="Logo" width="50" height="auto" class="d-inline-block align-text-top"><img></a>
		<a target="_blank" href="https://amelia-framework.eu/"><img src="{$conf->app_url}/img/amelia-logo.png" alt="Logo" width="auto" height="50" class="d-inline-block align-text-top"><img></a>
    </div>
  </div>
</div>





</body>

</html>