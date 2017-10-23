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
    
<<<<<<< HEAD
						<a title="Löschen" href="/schueler    /delete?id=<?= $user->id ?>">Löschen</a>
=======
						<a title="Löschen" href="/schueler/delete?id=<?= $user->id ?>">Löschen</a>
>>>>>>> a9951eae27d31d5580a9964191fd31a6f5505ebe
					<br>
				
		<?php endforeach ?>
	<?php endif ?>
</article>
