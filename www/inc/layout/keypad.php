<nav class="columns three">
	<ul>
		<?php
		foreach ($sections as $keySec => $valueSec) {
			$activeSection = ($arrayPath[0] == $keySec)? 'active' : '';
			$auxLink = $homeRoot.'/'.$keySec;
			?>
				<li class="<?=$activeSection?>" > 
					<a class="<?=$activeSection?>" href="<?=$auxLink?>" title="<?=$valueSec?>"><?=$valueSec?></a>
					<?php
					if(isset($subSections[$keySec])){
						?>
						<ul>
							<?php
							foreach ($subSections[$keySec] as $keySubSec => $valueSubSec) {
								$activeSubSection = ($arrayPath[1] == $keySubSec)? 'active' : '';
								$auxLink = $homeRoot.'/'.$keySec.'/'.$keySubSec;
								?>
								<li>
									<a class="<?=$activeSubSection?>" href="<?=$auxLink?>" title="<?=$valueSubSec?>"><?=$valueSubSec?></a>
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
		?>
	</ul>
</nav>