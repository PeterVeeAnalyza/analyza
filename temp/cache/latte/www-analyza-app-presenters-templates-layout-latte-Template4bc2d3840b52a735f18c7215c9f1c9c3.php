<?php
// source: /var/www/analyza/app/presenters/templates/@layout.latte

class Template4bc2d3840b52a735f18c7215c9f1c9c3 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('c89d4a7efb', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Denis Samardjiev">
	<meta name="description" content="Raleway | HTML5, CSS3, Responsive Parallax, Mega Multi-purpose Bootrap 3 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<title>Raleway | HTML5, CSS3, Responsive Parallax, Mega Multi-purpose Bootrap 3 Template</title>
	
	<!-- Royal Preloader CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/royal_preloader.css">

	<!-- jQuery Files -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Royal Preloader -->
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/royal_preloader.min.js"></script>
	<script type="text/javascript">
		Royal_Preloader.config({
		    mode:       	'number',
		    showProgress: 	false,
		    background: 	'#ffffff'
		});
	</script>

	<!-- Stylesheets -->
	<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/style.css" rel="stylesheet" title="main-css">
	<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap-social.css" rel="stylesheet">
	<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/jquery.snippet.css" rel="stylesheet">
	<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/buttons.css" rel="stylesheet">
	<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/style-switcher.css" rel="stylesheet">
	
	<!-- Alternate Stylesheets // choose what you want and remove rest for production -->
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/colors/blue.css" title="blue">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/colors/green.css" title="green">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/colors/purple.css" title="purple">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/colors/dark-blue.css" title="dark-blue">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/colors/red.css" title="red">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/colors/silver.css" title="silver">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/colors/pinkish.css" title="pinkish">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/colors/seagul.css" title="seagul">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/width-full.css" title="width-full">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/width-boxed.css" title="width-boxed">

	<!-- Icon Fonts -->
	<link href='<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_QUOTES) ?>/css/ionicons.min.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_QUOTES) ?>/css/font-awesome.css' rel='stylesheet' type='text/css'>

	<!-- Magnific Popup -->
	<link href='css/magnific-popup.css' rel='stylesheet' type='text/css'>
</head>
<body class="royal_preloader scrollreveal">
    
        <div id="royal_preloader"></div>
    
<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'content', $template->getParameters()) ?>

	<!-- Javascript Files -->
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/hover-dropdown.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/scrollReveal.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.snippet.min.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/style-switcher.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/activate-snippet.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/skrollr.min.js"></script>
    <script>
		var config = {
		easing: 'hustle',
		mobile:  true,
		delay:  'onload'
		}
		window.sr = new scrollReveal( config );
    </script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/main.js"></script>
</body>
</html>
<?php
}}