<?
	if(isset($arrayPath[1])){
		$fileToInc = $folderRoot.'/inc/'.$arrayPath[1].'/'.$arrayPath[1].'.php';
		if (!is_file($fileToInc)) {
			echo "error 404";	
		}
	}
	else{
		$fileToInc = $folderRoot.'/inc/'.$arrayPath[1].'/'.$arrayPath[1].'.php';
	}
	include($fileToInc);
?>
