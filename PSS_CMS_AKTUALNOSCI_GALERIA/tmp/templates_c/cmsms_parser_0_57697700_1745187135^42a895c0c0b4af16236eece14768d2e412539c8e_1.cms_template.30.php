<?php
/* Smarty version 4.5.2, created on 2025-04-21 00:12:15
  from 'cms_template:30' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6805713f93f742_14581343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a895c0c0b4af16236eece14768d2e412539c8e' => 
    array (
      0 => 'cms_template:30',
      1 => '1745179672',
      2 => 'cms_template',
    ),
    '762d5f15a4b15adfdf33c2baea66d2f9c0460fb8' => 
    array (
      0 => 'cms_template:A10_background',
      1 => '1745101443',
      2 => 'cms_template',
    ),
    'bdd62a682bfb9cc8e001515242642da636ab825a' => 
    array (
      0 => 'cms_template:footer_moj',
      1 => '1745104456',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
    'cms_template:A10_background' => 1,
    'cms_template:footer_moj' => 1,
  ),
),false)) {
function content_6805713f93f742_14581343 (Smarty_Internal_Template $_smarty_tpl) {
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

a {
  color: white !important;
  text-decoration: none;
}

a:visited,
a:hover,
a:focus,
a:active {
  color: white !important;
  text-decoration: none;
  outline: none;
  background: none;
  box-shadow: none;
}
.pagination {
  background: transparent;
  padding: 10px;
  text-align: center;
  font-size: 1rem;
}

.pagination .page-link {
  color: white;
  text-decoration: none;
  margin: 0 5px;
  padding: 6px 10px;
  border-radius: 5px;
  transition: none;
}

.pagination .page-link:visited,
.pagination .page-link:hover,
.pagination .page-link:focus,
.pagination .page-link:active {
  color: white;
  text-decoration: none;
  background: transparent;
  outline: none;
  box-shadow: none;
}

.pagination .page-info {
  color: white;
  margin: 0 10px;
}

.news-pagination {
  margin-top: 30px;
  text-align: center;
}

.news-page-link,
.news-current-page {
  display: inline-block;
  margin: 0 6px;
  padding: 8px 12px;
  font-size: 0.95rem;
  border: 1px solid #ddd;
  border-radius: 5px;
  text-decoration: none;
  color: #0077cc;
  transition: background 0.2s ease;
}

.news-page-link:hover {
  background: #f0f0f0;
}

.news-current-page {
  font-weight: bold;
  background: #0077cc;
  color: #fff;
  border-color: #0077cc;
}

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

.footer{
height:350px;
width:100%;
background-color: #ecd2b4;
color: #111; 
align-content:center;
}


.news-cards-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin: 30px 0;
  justify-content: center;
}

.news-card {
  background: #ecd2b4;
  border: 1px solid #e0e0e0;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
  padding: 20px;
  max-width: 350px;
  flex: 1 1 300px;
  transition: transform 0.2s ease;
}

.news-card:hover {
  transform: translateY(-5px);
}

.news-title {
  font-size: 1.2rem;
  margin: 0 0 10px;
}

.news-title a {
  text-decoration: none;
  color: #333;
}

.news-title a:hover {
  color: #0077cc;
}

.news-date {
  font-size: 0.9rem;
  color: #999;
  margin-bottom: 10px;
}

.news-summary {
  font-size: 1rem;
  margin: 15px 0;
  color: #444;
}

.news-footer {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  font-size: 0.85rem;
  color: #666;
  border-top: 1px solid #eee;
  padding-top: 10px;
  margin-top: 10px;
}

.news-category {
  font-weight: bold;
  color: #444;
}

.news-morelink a {
  text-decoration: underline;
}

</style>





	<nav id="menu">
		
	</nav>



<?php
$_smarty_tpl->_subTemplateRender('cms_template:A10_background', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '762d5f15a4b15adfdf33c2baea66d2f9c0460fb8', 'content_6805713f930a56_73745513');
?>




	<section id="content">
		<center><h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1></center>
		
	</section>


<?php
$_smarty_tpl->_subTemplateRender('cms_template:footer_moj', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, 'bdd62a682bfb9cc8e001515242642da636ab825a', 'content_6805713f93be71_21457529');
?>
</body>

</html><?php }
/* Start inline template "cms_template:A10_background" =============================*/
function content_6805713f930a56_73745513 (Smarty_Internal_Template $_smarty_tpl) {
?>
<img src="uploads/images/front.jpg" alt="a10-warthog" width="100%" heigth="auto"><?php
}
/* End inline template "cms_template:A10_background" =============================*/
/* Start inline template "cms_template:footer_moj" =============================*/
function content_6805713f93be71_21457529 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="footer"><center><b>Strona została stworzona na rzecz przedmiotu PSS 3 roku Studiów Inżynierskich niestacjonarnych Informatyka</b></center></div><?php
}
/* End inline template "cms_template:footer_moj" =============================*/
}
