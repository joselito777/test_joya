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

$pathImages = $homeRoot.'/images/photos/'.$section.'/';

// ---
if($section != ''){
	$images = $photos[$section];
}
if($subsection != ''){
	$images = $images[$subsection];
}

$total    = count($images);
$selected = array_slice($images, $first, $length);

// ---

header('Content-Type: text/xml');

echo '<data>';

// Return total number of images so the callback
// can set the size of the carousel.
echo '  <total>' . $total . '</total>';

foreach ($selected as $img) {
    echo '  <image>'.$pathImages.$img.'</image>';
}

echo '</data>';

?>
