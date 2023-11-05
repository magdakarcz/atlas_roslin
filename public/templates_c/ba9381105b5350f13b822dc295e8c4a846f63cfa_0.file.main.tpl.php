<?php
/* Smarty version 4.3.1, created on 2023-07-03 12:16:26
  from 'C:\xampp\htdocs\atlas_roslin\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a29ffaa2f649_98304141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba9381105b5350f13b822dc295e8c4a846f63cfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atlas_roslin\\app\\views\\templates\\main.tpl',
      1 => 1688379385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a29ffaa2f649_98304141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author"      content="Magdalena Karcz">
	<title>Atlas roślin</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->vendor;?>
 bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->vendor;?>
 owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->vendor;?>
 lightcase/lightcase.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">-->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/icomoon.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/animate.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/alertify.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/magnific-popup.css">
	
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/alertify.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/softscroll.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/pagination.css">		
</head>

<!--<body style="margin-left: 100px;">-->
<body>
<div id="fh5co-page">
	<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
	<aside id="fh5co-aside" role="complementary" class="border js-fullheight">
	<h1 id="fh5co-logo"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roslinaList"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->img;?>
atlastransparent.png" width="182" height="44" alt="atlasroslin"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roslinaList">Lista</a></li>
					<?php if (core\RoleUtils::inRole("1")) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rola">Role</a></li><?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a></li>
					<?php } else { ?>	
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" class="pure-menu-heading pure-menu-link">Zaloguj</a></li>
					<?php }?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Rejestracja</a></li>
			<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>	
					<br><br><br><br><br>
					<h6>Posiadana rola: gość.<br> Aby móc dodawać rośliny, zaloguj się.</h6>
			<?php }?>
			<?php if (core\RoleUtils::inRole("2")) {?>	
					<br><br><br><br><br>
					<h6>Posiadana rola: użytkownik. <br>Moderator może edytować oraz usuwać rośliny</h6>
			<?php }?>
			<?php if (core\RoleUtils::inRole("3")) {?>
					<br><br><br><br><br>
					<h6>Posiadana rola: moderator.</h6>
			<?php }?>
			<?php if (core\RoleUtils::inRole("1")) {?>
					<br><br><br><br><br>
					<h6>Posiadana rola: administrator. </h6>
			<?php }?>
				</ul>
			</nav>

	<div class="fh5co-footer">
				<p><small>Projekt stworzony na potrzeby zajęć Języki programowania dynamicznych stron internetowych 
				oraz Projektowanie bazodanowych aplikacji webowych.</span> 
				<span>Szablon Blend: <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a></span> 
				<span>Framework PHP: <a href="https://amelia-framework.eu/" target="_blank">Amelia</a></span>
				<span>Biblioteki: <a href="https://www.smarty.net/" target="_blank">Smarty</a>,  
				<a href="https://medoo.in/" target="_blank">Medoo</a></span> 
				</small></p>
			</div>

	</aside>
	</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140066011564a29ffa9e1c36_92144110', 'top');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170158119864a29ffa9e57d7_06354632', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193906824464a29ffaa0bb46_94363850', 'bottom');
?>


<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/owlcarousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/isotope/isotope.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/lightcase/lightcase.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/waypoints/waypoint.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/countTo/jquery.countTo.js"><?php echo '</script'; ?>
>
	<!-- Main JS -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/app.min.js "><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/livereload.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.countTo.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/magnific-popup-options.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'top'} */
class Block_140066011564a29ffa9e1c36_92144110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_140066011564a29ffa9e1c36_92144110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_170158119864a29ffa9e57d7_06354632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_170158119864a29ffa9e57d7_06354632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
				<?php echo '<script'; ?>
 type="text/javascript">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					alertify.error("<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
");
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php echo '</script'; ?>
>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
				<?php echo '<script'; ?>
 type="text/javascript">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					alertify.success("<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
");
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php echo '</script'; ?>
>
			<?php }
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_193906824464a29ffaa0bb46_94363850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_193906824464a29ffaa0bb46_94363850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
