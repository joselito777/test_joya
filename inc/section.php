<?
	if(isset($arrayPath[0])){
		$fileToInc = $folderRoot.'/inc/'.$arrayPath[0].'/'.$arrayPath[0].'.php';
		if ( is_file($fileToInc)) {
			include($fileToInc);
		}
		else{
			echo "error 404";	
		}
	}
	else{

	}
?>
