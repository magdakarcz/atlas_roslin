<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author"      content="Magdalena Karcz">
	<title>Atlas roślin</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" >
	<link rel="stylesheet" href="{$conf->vendor} bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="{$conf->vendor} owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{$conf->vendor} lightcase/lightcase.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">-->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/icomoon.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/animate.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/bootstrap.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/alertify.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/magnific-popup.css">
	
	<script type="text/javascript" src="{$conf->app_url}/js/alertify.js"></script>
	<script src="{$conf->app_url}/js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>
	<script src="{$conf->app_url}/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/js/softscroll.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<link rel="stylesheet" href="{$conf->app_url}/css/pagination.css">		
</head>

<!--<body style="margin-left: 100px;">-->
<body>
<div id="fh5co-page">
	<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
	<aside id="fh5co-aside" role="complementary" class="border js-fullheight">
	<h1 id="fh5co-logo"><a href="{$conf->action_root}roslinaList"><img src="{$conf->img}atlastransparent.png" width="182" height="44" alt="atlasroslin"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="{$conf->action_root}roslinaList">Lista</a></li>
					{if core\RoleUtils::inRole("1")}<li><a href="{$conf->action_root}rola">Role</a></li>{/if}
					{if count($conf->roles)>0}
					<li><a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a></li>
					{else}	
					<li><a href="{$conf->action_root}login" class="pure-menu-heading pure-menu-link">Zaloguj</a></li>
					{/if}
					<li><a href="{$conf->action_root}register">Rejestracja</a></li>
			{if count($conf->roles)==0}	
					<br><br><br><br><br>
					<h6>Posiadana rola: gość.<br> Aby móc dodawać rośliny, zaloguj się.</h6>
			{/if}
			{if core\RoleUtils::inRole("2")}	
					<br><br><br><br><br>
					<h6>Posiadana rola: użytkownik. <br>Moderator może edytować oraz usuwać rośliny</h6>
			{/if}
			{if core\RoleUtils::inRole("3")}
					<br><br><br><br><br>
					<h6>Posiadana rola: moderator.</h6>
			{/if}
			{if core\RoleUtils::inRole("1")}
					<br><br><br><br><br>
					<h6>Posiadana rola: administrator. </h6>
			{/if}
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
{block name=top} {/block}
{block name=messages}
			{if $msgs->isError()}
				<script type="text/javascript">
				{foreach $msgs->getMessages() as $msg}
					alertify.error("{$msg->text}");
				{/foreach}
				</script>
			{/if}

			{if $msgs->isInfo()}
				<script type="text/javascript">
					{foreach $msgs->getMessages() as $msg}
					alertify.success("{$msg->text}");
					{/foreach}
				</script>
			{/if}
{/block}

{block name=bottom} {/block}

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="{$conf->app_url}/vendor/bootstrap/popper.min.js"></script>
	<script src="{$conf->app_url}/vendor/bootstrap/bootstrap.min.js"></script>

	<script src="{$conf->app_url}/vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="{$conf->app_url}/vendor/isotope/isotope.min.js"></script>
	<script src="{$conf->app_url}/vendor/lightcase/lightcase.js"></script>
	<script src="{$conf->app_url}/vendor/waypoints/waypoint.min.js"></script>
	<script src="{$conf->app_url}/vendor/countTo/jquery.countTo.js"></script>
	<!-- Main JS -->
	<script src="{$conf->app_url}/js/app.min.js "></script>
	<script src="{$conf->app_url}/js/livereload.js"></script>

	<script src="{$conf->app_url}/js/jquery.easing.1.3.js"></script>
	<script src="{$conf->app_url}/js/bootstrap.min.js"></script>
	<script src="{$conf->app_url}/js/owl.carousel.min.js"></script>
	<script src="{$conf->app_url}/js/jquery.waypoints.min.js"></script>
	<script src="{$conf->app_url}/js/jquery.stellar.min.js"></script>
	<script src="{$conf->app_url}/js/jquery.countTo.js"></script>
	<script src="{$conf->app_url}/js/jquery.magnific-popup.min.js"></script>
	<script src="{$conf->app_url}/js/magnific-popup-options.js"></script>
</body>
</html>