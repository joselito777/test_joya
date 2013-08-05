<nav class="columns three">
	<ul>
		<?php
		foreach ($sections as $keySec) {
			if(!isset($sectionsHiddens[$keySec])){
				$activeSection = (isset($arrayPath[1]) && $arrayPath[1] == $keySec)? 'active' : '';
				$auxLinksec = $homeRoot.'/'.$language.'/'.$keySec;
				?>
					<li class="<?=$activeSection?>" >
						<a class="<?=$activeSection?>" href="<?=$auxLinksec?>" title="<?=$dictionarySections[$keySec]?>">
							<?=$dictionarySections[$keySec]?>
						</a>
						<?php
						if(isset($subSections[$keySec])){
							?>
							<ul>
								<?php
								foreach ($subSections[$keySec] as $keySubSec) {
									$activeSubSection = (isset($arrayPath[2]) && $arrayPath[2] == $keySubSec)? 'active' : '';
									$auxLink = $auxLinksec.'/'.$keySubSec;
									?>
									<li>
										<a class="<?=$activeSubSection?>" href="<?=$auxLink?>" title="<?=$dictionarySubSections[$keySec][$keySubSec]?>">
											<?=$dictionarySubSections[$keySec][$keySubSec]?>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
							<?php
						}
						?>
					</li>
				<?php
			}
		}
		?>
	</ul>
</nav>
