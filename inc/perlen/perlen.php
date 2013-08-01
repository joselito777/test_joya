<?
	if(isset($arrayPath[2])){
		$fileToInc = $folderRoot.'/inc/'.$arrayPath[1].'/'.$arrayPath[2].'.php';
		if (!is_file($fileToInc)) {
			$fileToInc = $folderRoot.'/inc/sample.php';	
		}
	}
	else{
		reset($subSections[$arrayPath[1]]);
		$firstSubSections = reset($subSections[$arrayPath[1]]);
		$fileToInc = $folderRoot.'/inc/'.$arrayPath[1].'/'.$firstSubSections.'.php';
	}
	include($fileToInc);
?>
