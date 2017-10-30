<article class="hreview open special">
	<?php if (empty($schueler)): ?>
		<div class="dhd">
			<h2 class="item title">Hoopla! Keine Schüler gefunden.</h2>
            
		</div>
	<?php else: ?>
    <!-- Listet Schüler in Tabellen form auf -->
        <table class="schüler">
            <tr>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>E-Mail</th>
            </tr>
            <?php foreach ($schueler as $user): ?>
                <tr>
                    <td style="width: 30%;"><?=$user->firstname?></td>
                    <td style="width: 30%;"><?=$user->lastname?></td>
                    <td style="width: 30%;"><?=$user->email?></td>
                </tr>
            <?php endforeach ?>
        </table>
	<?php endif ?>
</article>
