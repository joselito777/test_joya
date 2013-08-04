<?
	if(isset($arrayPath[1])){
		if(isset($arrayPath[2])){
			$fileToInc = $folderRoot.'/inc/'.$arrayPath[1].'/'.$arrayPath[2].'.php';
			if (!is_file($fileToInc)) {
				$fileToInc = $folderRoot.'/inc/sample.php';	
			}
		}
		else{
			$fileToInc = $folderRoot.'/inc/'.$arrayPath[1].'/'.$arrayPath[1].'.php';
			if (!is_file($fileToInc)) {
				reset($subSections[$arrayPath[1]]);
				$firstSubSections = reset($subSections[$arrayPath[1]]);
				$fileToInc = $folderRoot.'/inc/'.$arrayPath[1].'/'.$firstSubSections.'.php';
			}
		}
	}

	if (is_file($fileToInc)) {
		include($fileToInc);
	}
	else {
		include($folderRoot.'/inc/home.php');
	}
?>
