<?php

function getVariablesURL($url){
	
	if($_SERVER['HTTP_HOST']=="localhost") {
		$url = preg_replace('/\/piagiio\/v2\/www\//','',$url);
	}
	else {
		$url = substr($url,1);
	}
	$url = preg_replace('/\/$/', '', $url);
	$partes = explode('/', $url);
	$cantPartes = count($partes);
		
	$variables = array();
	for($c = 0; $c < $cantPartes; $c++){
		$variables[] = limpiar($partes[$c]);
	}
	return $variables;
}

function permalink($string){
	$string =	utf8_decode($string);
	$permalink = (strtolower(trim(preg_replace(array('~[^0-9a-z]~i',
	'~-+~'), '-', preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i',
	'$1', htmlentities($string, ENT_QUOTES))), '-')));
	return $permalink;
}

function limpiar($valor){
	return preg_replace('/[^a-zA-Z0-9-_]/', '', $valor);

}	
?>
