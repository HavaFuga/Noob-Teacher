<form class="form" validation() action="/schueler/doCreate" method="post" name="myForm" onsubmit="return validateForm()">
	<div class="component" data-html="true">
		<div class="form-group">
		  <label class="col-md-2 control-label" for="firstname">Vorname</label>
		  <div class="col-md-4">
		  	<input id="firstname" name="firstname" type="text" placeholder="Vorname" class="form-control input-md">
		  </div><br>
		</div><br>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="lastname">Nachname</label>
		  <div class="col-md-4">
		  	<input id="lastname" name="lastname" type="text" placeholder="Nachname" class="form-control input-md">
		  </div><br>
		</div><br>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="email">Mail</label>
		  <div class="col-md-4">
		  	<input id="email" name="email" type="text" placeholder="Mail" class="form-control input-md">
		  </div><br>
		</div><br>
		
		<div class="form-group">
	      <!--<label class="col-md-2 control-label" for="send">&nbsp;</label>-->
		  <div class="col-md-4">
		    <input id="send" name="send" type="submit" class="btn btn-primary" value="Erstellen">
		  </div><br>
		</div><br>
	</div>
</form>
