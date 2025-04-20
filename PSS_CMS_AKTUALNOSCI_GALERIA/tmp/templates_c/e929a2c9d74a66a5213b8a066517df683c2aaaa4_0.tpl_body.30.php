<?php
/* Smarty version 4.5.2, created on 2025-04-21 00:31:28
  from 'tpl_body:30' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_680575c04cd6a9_05150967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e929a2c9d74a66a5213b8a066517df683c2aaaa4' => 
    array (
      0 => 'tpl_body:30',
      1 => '1745188286',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
    'cms_template:A10_background' => 1,
    'cms_template:footer_moj' => 1,
  ),
),false)) {
function content_680575c04cd6a9_05150967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp3\\htdocs\\pss\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
?>
<body>



<style>
.footer-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background-color: #ecd2b4;
}

.footer-text {
  width: 50%;
  text-align: left;
}

.footer-map {
  width: 50%;
  text-align: right;
}

.footer-map iframe {
  width: 100%;
  height: 300px;
  border: 0;
}

/* Dostosowanie na urządzenia mobilne */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    text-align: center;
  }

  .footer-text, .footer-map {
    width: 100%;
    margin-bottom: 20px;
  }

  .footer-map iframe {
    width: 90%;
    height: 250px;
  }
}

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
		<?php echo Navigator::function_plugin(array(),$_smarty_tpl);?>

	</nav>



<?php $_smarty_tpl->_subTemplateRender('cms_template:A10_background', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




	<section id="content">
		<center><h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1></center>
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
	</section>


<?php $_smarty_tpl->_subTemplateRender('cms_template:footer_moj', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
