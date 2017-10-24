<form class="form" action="/schueler/doedit" method="post">
    
    <?php 
        if(isset($aktuellerSchueler)){
            echo '<input name="id" type="hidden" value="'.$aktuellerSchueler->id.'">';
        }
       ?>    
	<div class="component" data-html="true">
		<div class="form-group">
		  <label class="col-md-2 control-label" for="firstname">Vorname</label>
		  <div class="col-md-4">
		  	<input id="firstname" name="firstname" type="text" placeholder="Vorname" class="form-control input-md"
                   <?php 
                    if(isset($aktuellerSchueler)){
                        echo 'value="'.$aktuellerSchueler->firstname.'"';
                    }
                   else{
                       echo 'disabled';
                   }
                   ?>
                   >
		  </div><br>
		</div><br>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="lastname">Nachname</label>
		  <div class="col-md-4">
		  	<input id="lastname" name="lastname" type="text" placeholder="Nachname" class="form-control input-md" 
                   <?php
                   if(isset($aktuellerSchueler)){
                        echo 'value="'.$aktuellerSchueler->lastname.'"';
                    }
                   else{
                       echo 'disabled';
                   }
                   ?>
                   >
		  </div><br>
		</div><br>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="email">Mail</label>
		  <div class="col-md-4">
		  	<input id="email" name="email" type="text" placeholder="Mail" class="form-control input-md" 
                   <?php
                   if(isset($aktuellerSchueler)){
                        echo 'value="'.$aktuellerSchueler->email.'"';
                    }
                   else{
                       echo 'disabled';
                   }
                   ?>                   
                   >
		  </div><br>
		</div><br>
		
        <div class="form-group">
        
            <?php if (empty($schueler)): ?>
                <div class="dhd">
                    <h2 class="item title">Hoopla! Keine Schüler gefunden.</h2>

                </div>
                <?php else: ?>
                <?php foreach ($schueler as $user): ?>



           <?= $user->firstname?>
             <?=  $user->lastname . "\t" ?> 

            <?= $user->email?>
                                <a title="Löschen" href="/schueler/delete?id=<?= $user->id ?>">Löschen</a>
            <?= " | "?>
            <a title="Bearbeiten" href="/schueler/edit?id=<?= $user->id ?>">Bearbeiten</a>
                            <br>

                <?php endforeach ?>
            <?php endif ?>
        </div>
        
		<div class="form-group">
	      <!--<label class="col-md-2 control-label" for="send">&nbsp;</label>-->
		  <div class="col-md-4">
		    <input id="send" name="send" type="submit" class="btn btn-primary" value="Speichern">
		  </div><br>
		</div><br>
	</div>
</form>
