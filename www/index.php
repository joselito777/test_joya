<?php
	$folderRoot = dirname(__FILE__);
	$homeRoot = 'http://localhost/';

	require_once($folderRoot.'/includes/func_url.php');

	$arrayPath = array();
	if(isset($_SERVER['REQUEST_URI'])) {
		$arrayPath = getVariablesURL($_SERVER['REQUEST_URI']);
	}


	if(isset($arrayPath[0]) && file_exists($folderRoot.'inc/'.$arrayPath[0].'php')){
		$section = $arrayPath[0];
	}
	else {
		$section = 'home';
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>GOLDSCHMIEDE ATELIER PIAGGIO</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/piaggio.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<script src="scripts/jquery-1.10.1.min.js"></script>
	<script src="scripts/jquery.ez-bg-resize.js"></script>

	<script src="scripts/functions.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body class="home">
	<div id="wrapper">
		<?php
		include($folderRoot.'/inc/layout/header.php');
		?>
		<div class="container">
			<?php
			include($folderRoot.'/inc/layout/keypad.php');
			?>	
			<section class="columns sectionContent eleven right">
				<?php
				include($folderRoot.'/inc/'.$section.'.php');
				?>
			</section>
		</div>
	</div>
</body>
</html>