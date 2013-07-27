<?
	if(isset($arrayPath[1])){
		$fileToInc = $folderRoot.'/inc/'.$arrayPath[0].'/'.$arrayPath[1].'.php';
		if (!is_file($fileToInc)) {
			$fileToInc = $folderRoot.'/inc/sample.php';	
		}
	}
	else{
		reset($subSections[$arrayPath[0]]);
		$firstSubSections = key($subSections[$arrayPath[0]]);
		$fileToInc = $folderRoot.'/inc/'.$arrayPath[0].'/'.$firstSubSections.'.php';
		if (!is_file($fileToInc)) {
			$fileToInc = $folderRoot.'/inc/sample.php';	
		}
	}
	include($fileToInc);
?>