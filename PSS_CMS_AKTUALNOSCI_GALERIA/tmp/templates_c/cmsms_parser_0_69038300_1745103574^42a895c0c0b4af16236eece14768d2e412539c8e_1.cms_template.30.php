<?php
/* Smarty version 4.5.2, created on 2025-04-20 00:59:34
  from 'cms_template:30' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_68042ad6ae7b10_60402286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a895c0c0b4af16236eece14768d2e412539c8e' => 
    array (
      0 => 'cms_template:30',
      1 => '1745103239',
      2 => 'cms_template',
    ),
    '762d5f15a4b15adfdf33c2baea66d2f9c0460fb8' => 
    array (
      0 => 'cms_template:A10_background',
      1 => '1745101443',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
    'cms_template:A10_background' => 1,
  ),
),false)) {
function content_68042ad6ae7b10_60402286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp3\\htdocs\\pss\\lib\\plugins\\function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'C:\\xampp3\\htdocs\\pss\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),2=>array('file'=>'C:\\xampp3\\htdocs\\pss\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>


	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>

<body>



<style>
body {
  background-color: #333;
  color:white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

</style>





	<nav id="menu">
		
	</nav>



<?php
$_smarty_tpl->_subTemplateRender('cms_template:A10_background', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '762d5f15a4b15adfdf33c2baea66d2f9c0460fb8', 'content_68042ad6addb63_56594145');
?>




	<section id="content">
		<center><h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1></center>
		
	</section>

</body>

</html><?php }
/* Start inline template "cms_template:A10_background" =============================*/
function content_68042ad6addb63_56594145 (Smarty_Internal_Template $_smarty_tpl) {
?>
<img src="uploads/images/front.jpg" alt="a10-warthog" width="100%" heigth="auto"><?php
}
/* End inline template "cms_template:A10_background" =============================*/
}
