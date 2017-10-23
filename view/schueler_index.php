<article class="hreview open special">
	<?php if (empty($users)): ?>
		<div class="dhd">
			<h2 class="item title">Hoopla! Keine Schüler gefunden.</h2>
            
		</div>
	<?php else: ?>
		<?php foreach ($users as $user): ?>
			
				
				    
					<?= $user->firstName ?>
                    <?=  $user->lastName . "\t" ?> 
                    
                    <?= $user->email ?> 
    
						<a title="Löschen" href="/user/delete?id=<?= $user->id ?>">Löschen</a>
					<br>
				
		<?php endforeach ?>
	<?php endif ?>
</article>
