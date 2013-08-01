<?
	$thumbnails = array(
			'sudseeperlen_Layout-1-6.jpg',
			'sudseeperlen_Layout-1-7.jpg',
			'sudseeperlen_Layout-1-8.jpg',
			'sudseeperlen_Layout-1-9.jpg',
			'sudseeperlen_Layout-1-10.jpg',
			'sudseeperlen_Layout-1-11.jpg',
			'sudseeperlen_Layout-1-12.jpg',
			'sudseeperlen_Layout-1-13.jpg',
			'sudseeperlen_Layout-1-14.jpg',
			'sudseeperlen_Layout-1-15.jpg'
		);
	$photos = array(
			'barrakudas-uw.jpg',
			'broome-harbour.jpg',
			'broome-pearls.jpg',
			'garnelle-anemone.jpg',
			'hai-kubaI.jpg',

			'hutte-rangiroa.jpg',
			'japanese-cementery-broome.jpg',
			'nicolasfisch.jpg',
			'papaleyiii.jpg',
			'tintenfisch-hp.jpg',

			'rafflesbay-australien-perlenfarm.jpg',
			'keit-dureau-sam-marlow-kuribayashi.jpg',
			'rangiroa-strasse.jpg',
			'robertwan.jpg',
			'tiburon-rangiroa-ia.jpg',
			'uw-fisch.jpg',
			'zuchtung-perle.jpg',
		);

	$pathImages = $homeRoot.'/images/photos/perlen';
	$pathThms = $pathImages.'/thumbnails';	
?>

<h3><?=$subSections['perlen']['tahiti-perlen']?></h3>
<p>
	In den Tiefen der Lagunen des Tuamoto Archipels, abgelegen der Zivilisation der Cook Islands oder den
	Südprovinzen Chinas, werden die sogenannten "Schwarzen Perlen" gezüchtet. Nach jahrelangen Ausei-
	nandersetzungen haben die Polynesier ihre Geheimnisse der Perlenzucht offenbart. Heute, es ist noch
	möglich, in etwa mehr als einem Dutzend polynesischen Atollen, die nicht überfischt sind, werden Larven
	der Austern gesammelt. Dies stellt den ersten Vorgang der Perlenzucht dar.
</p>
<div id="" class="mycarousel principal jcarousel-skin-tango">
	<ul class="">
		<?
		foreach ($thumbnails as $keyTh => $valueth) {
			?>
			<li>
					<img src="<?=$pathImages?>/<?=$photos[$keyTh]?>" alt="perlen 1" />	
			</li>
			<?
		}
		?>
	</ul>
</div>