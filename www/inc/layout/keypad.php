<nav class="columns three">
	<ul>
		<?php
		foreach ($sections as $keySec => $valueSec) {
			$activeSection = ($arrayPath[0] == $keySec)? 'active' : '';
			?>
				<li class="<?=$activeSection?>" > 
					<a class="<?=$activeSection?>" href="<?=$homeRoot;?>/<?=$keySec;?>" title="<?=$valueSec?>"><?=$valueSec?></a>
					<?php
					if(isset($subSections[$keySec])){
						?>
						<ul>
							<?php
							foreach ($subSections[$keySec] as $keySubSec => $valueSubSec) {
								?>
								<li>
									<a href="<?=$homeRoot;?>/<?=$keySec;?>/<?=$keySubSec;?>" title="<?=$valueSubSec?>"><?=$valueSubSec?></a>
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