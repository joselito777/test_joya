<?
	if(isset($arrayPath[1])){
		$fileToInc = $folderRoot.'/inc/'.$arrayPath[0].'/'.$arrayPath[1].'.php';
		if ( is_file($fileToInc)) {
			include($fileToInc);
		}
		else{
			echo "error 404";	
		}
	}
	else{
		$fileToInc = $folderRoot.'/inc/'.$arrayPath[0].'/tahiti-perlen.php';
	}
?>