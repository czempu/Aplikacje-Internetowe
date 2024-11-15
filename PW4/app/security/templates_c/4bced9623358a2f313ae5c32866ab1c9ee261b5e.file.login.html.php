<?php /* Smarty version Smarty-3.1.17, created on 2024-11-15 23:57:15
         compiled from "C:\xampp\htdocs\x\app\security\login.html" */ ?>
<?php /*%%SmartyHeaderCode:568594883671fd57c6547f9-77659437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bced9623358a2f313ae5c32866ab1c9ee261b5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\x\\app\\security\\login.html',
      1 => 1731709203,
      2 => 'file',
    ),
    '9ef676d455d862419dfa83b62ad3d5a8391b08b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\x\\templates\\main.html',
      1 => 1731702546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '568594883671fd57c6547f9-77659437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_671fd57c6a9fd4_98994842',
  'variables' => 
  array (
    'conf' => 0,
    'page_description' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_671fd57c6a9fd4_98994842')) {function content_671fd57c6a9fd4_98994842($_smarty_tpl) {?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styles.css">
    <style>

        
    </style>
</head>
<body>







    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Idź do formularza</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php">Kalkulator</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calcCred.php">Kalkulator Kredytowy</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php">Wyloguj</a></li>
                </ul>
            </div>
        </div>
    </nav>


        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
</p>
                    </div>
                    <div style="color:white; height: auto; width: 100%;">
                    <div class="align-self-baseline">
                        

<h2 class="content-head is-center"></h2>




	<div class="pure-g">
		<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
			<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/login.php" method="post">
				<fieldset>
		
					<input id="id_login" type="text" placeholder="Login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
							<br>
					<input id="id_pass" type="password" placeholder="Hasło" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
">
							<br>
		
					<button type="submit" class="pure-button">Zaloguj</button>
				</fieldset>
			</form>
		</div>
		
		<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


			
			<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
				<h4>Wystąpiły błędy: </h4>
				<ol class="err">
				<?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value->getErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
				<?php } ?>
				</ol>
			<?php }?>
			
			
			<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
				<h4>Informacje: </h4>
				<ol class="inf">
				<?php  $_smarty_tpl->tpl_vars['inf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value->getInfos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->key => $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
				<?php } ?>
				</ol>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
				<h4>Wynik</h4>
				<p class="res">
				<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

				</p>
			<?php }?>
			
			</div>
			</div>
		



                    </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
         
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Strona logowania</h2>

                        <p class="text-white-75 mb-4">Wykorzystano bootstrap, Autor: Marcel Smarczyk</p>
                    </div>
                </div>
            </div>
        </body>
</html>

<?php }} ?>
