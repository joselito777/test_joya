<?php
	$folderRoot = dirname(__FILE__);
	
	if($_SERVER['HTTP_HOST']=="localhost") {
		$homeRoot = 'http://localhost/piaggio';
	}
	else {
		$homeRoot = 'http://piaggio.herokuapp.com';
	}

	require_once($folderRoot.'/includes/func_url.php');
	require_once($folderRoot.'/includes/defines.php');

	$arrayPath = array();
	if(isset($_SERVER['REQUEST_URI'])) {
		$arrayPath = getVariablesURL($_SERVER['REQUEST_URI']);
	}

	switch ($arrayPath[0]) {
		case 'internetshop': 
		case 'perlen':
		case 'diamenten':
		case 'farbedelsteine':
		case 'platin-gold':{
			$actualSection = 'section';
		};
		break;
		case 'impressum':{
			$actualSection = 'impressum';
		};
		break;
		
		default: {
			$actualSection = 'home';	
		}
		break;
	}

	if(!file_exists($folderRoot.'/inc/'.$actualSection.'.php')){
		$actualSection = 'home';
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

	<meta name='viewport' content='width=1024,user-scalable=yes'>

	<link rel="stylesheet" href="<?=$homeRoot?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?=$homeRoot?>/stylesheets/piaggio.css">
	<link rel="stylesheet" href="<?=$homeRoot?>/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?=$homeRoot?>/stylesheets/layout.css">
	<link rel="stylesheet" href="<?=$homeRoot?>/stylesheets/jquery.fancybox.css">

	<script type="text/javascript" src="<?=$homeRoot?>/scripts/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="<?=$homeRoot?>/scripts/jquery.ez-bg-resize.js"></script>
	<script type="text/javascript" src="<?=$homeRoot?>/scripts/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?=$homeRoot?>/scripts/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?=$homeRoot?>/scripts/jquery-migrate-1.1.1.min.js"></script>
	<script type="text/javascript" src="<?=$homeRoot?>/scripts/jquery.jcarousel.min.js"></script>

	<script>
		homeRoot = '<?=$homeRoot?>';
	</script>
	<script src="<?=$homeRoot?>/scripts/functions.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body class="<?=isset($arrayPath[0])? $arrayPath[0] : ''?> <?=isset($arrayPath[1])? $arrayPath[1] : ''?>">
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
				include($folderRoot.'/inc/'.$actualSection.'.php');
				?>
			</section>
		</div>
	</div>
</body>
</html>
