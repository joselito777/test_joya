<?php
$folderRoot = dirname(__FILE__);

if($_SERVER['HTTP_HOST']=="localhost") {
	$homeRoot = 'http://localhost/piaggio';
}
else {
	$homeRoot = 'http://piaggio.herokuapp.com';
}

require_once($folderRoot.'/includes/defines_images_sliders.php');

// Array indexes are 0-based, jCarousel positions are 1-based.
$first = max(0, intval($_GET['first']) - 1);
$last  = max($first + 1, intval($_GET['last']) - 1);
$length = $last - $first + 1;
$section = $_GET['section'];
$subsection = $_GET['subsection'];
$lang = $_GET['lang'];

require_once($folderRoot.'/languages/images_sliders.'.$lang.'.php');

$pathImages = $homeRoot.'/images/photos/'.$section.'/';

// ---
if($section != ''){
	$images = $photos[$section];
	$imagesText = $photos_footer[$section];
}
if($subsection != ''){
	$images = $images[$subsection];
	$imagesText = $imagesText[$subsection];
}

$total = count($images);
$selected = array_slice($images, $first, $length);
$selectedText = array_slice($imagesText, $first, $length);

// ---

header('Content-Type: text/xml');

echo '<data>';

// Return total number of images so the callback
// can set the size of the carousel.
echo '  <total>' . $total . '</total>';

foreach ($selected as $i => $img) {
		echo '	<item>';
		echo '		<image>'.$pathImages.$img.'</image>';
		echo '		<text>'.$selectedText[$i].'</text>';
		echo '	</item>';
}

echo '</data>';

?>
