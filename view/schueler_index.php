<article class="hreview open special">
	<?php if (empty($schueler)): ?>
		<div class="dhd">
			<h2 class="item title">Hoopla! Keine Schüler gefunden.</h2>
            
		</div>
	<?php else: ?>
		<?php foreach ($schueler as $user): ?>
			
				
				    
					<?= $user->firstname?>
                    <?=  $user->lastname . "\t" ?> 

                    <?= $user->email?>
					

					<br>
				
		<?php endforeach ?>
	<?php endif ?>
</article>
