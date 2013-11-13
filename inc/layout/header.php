<?php
	$auxUrlLocation = '';
	$auxUrlLocation .= (isset($arrayPath[1]))? '/'.$arrayPath[1] : '';
	$auxUrlLocation .= (isset($arrayPath[2]))? '/'.$arrayPath[2] : '';
?>
<div id="header">
	<div class="container">
		<h1><a href="<?=$homeRoot?>/" class="logo" title="Piaggio">Goldschmiede Atelier Piaggio</a></h1>

		<div class="links">
			<div class=" flags">
				<a href="<?=$homeRoot?>/de<?=$auxUrlLocation?>" title="Deutsch"><img src="<?=$homeRoot?>/images/layout/de.png" ></a>
				<a href="<?=$homeRoot?>/en<?=$auxUrlLocation?>" title="English"><img src="<?=$homeRoot?>/images/layout/gb.png" ></a>
				<a href="<?=$homeRoot?>/fr<?=$auxUrlLocation?>" title="Française"><img src="<?=$homeRoot?>/images/layout/fr.png" ></a>
				<a href="<?=$homeRoot?>/la<?=$auxUrlLocation?>" title="Español"><img src="<?=$homeRoot?>/images/layout/ar.png" ></a>
			</div>
			<a href="http://www.nicolas-piaggio-fotograf.de" target="_blank" title="">nicolas-piaggio-fotograf.de</a><br />
			<a href="#" target="_blank" class="uppercase" title="">Facebook</a> - 
			<a href="#" target="_blank" class="uppercase" title="">Blog</a> -
			<?
			if($language == 'de') {
				?>
				<a href="<?=$homeRoot?>/<?=$language?>/impressum" class="uppercase" title=""><?=$dictionaryHeader['impressum']?></a> -
				<?
			}
			?>
			<a href="<?=$homeRoot?>/<?=$language?>/kontakt" class="uppercase" title=""><?=$dictionaryHeader['kontakt']?></a>
		</div>
		<h2 class="uppercase">
			<?=$dictionaryHeader['goldschmiedeatelier']?>
		</h2>
		<h3>
			<span class="uppercase"><?=$dictionaryHeader['address']?></span> ·
			<a href="mailto:npiaggio@goldschmiede-piaggio.de">npiaggio@goldschmiede-piaggio.de</a>
		</h3>
	</div>
</div>
