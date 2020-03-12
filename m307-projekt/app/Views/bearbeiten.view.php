<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Bearbeitung Dörrung</title>
  <link rel="stylesheet" href="public/css/app.css">
    <h1><a href="?uri=" class="titel">FruttiTutti</a></h1>
</head>
<body>
  <ul>
  <li><a href="?uri=" class='nav'>Willkommen</a></li>
  <li><a href="?uri=erfassen" class='nav'>Erfassen</a></li>
  <li><a href="?uri=anzeige" class='nav'>Anzeigen</a></li>
</ul>
<div class="bearbeitung">
  <form action="?uri=updatetask&?id=<?=$id?>" method="post" id="errorForm">
<br><br>
<fieldset>
  <legend>Angaben zur Person</legend>

  <div class="form-group">
      <label for="name">Name*</label><br>
      <input type="text" id="name" name="name" value=<?=$name?>>
  </div>

  <div class="form-group">
      <label for="email">Email*</label><br>
      <input type="email" id="email" name="email" value=<?=$email?>>
  </div>
  <label for="phone">Telefon</label><br>
  <input type="tel" id="phone" name="phone" pattern="^(0|0041|\+41)?[1-9\s][0-9\s]{1,12}$"><br><br>
</fieldset>

    <br>
    <fieldset>
      <legend>Angaben zur Bestellung</legend>
      <label for="category">Mengenkategorie</label><br>
      <select name="category" disabled>
        <?php foreach ($categories as $cat): ?>
          <option value="<?=$cat->id?>"<?php if($category == $cat->id){echo("selected");}?>><?=$cat->name?></option>
        <?php endforeach; ?>
      </select><br><br>
      <label for="fruit">Frucht</label><br>
      <select name="fruit">
        <?php foreach ($fruits as $fru): ?>
          <option value="<?=$fru->id?>"<?php if($fruit == $fru->id){echo("selected");}?>><?=$fru->name?></option>
        <?php endforeach; ?>
      </select><br><br>
      <label for="frist">Frist</label><br>
      <input type="text" id="frist" name="frist" value="<?=$frist?>" readonly><br><br>
      <input type="checkbox" id="status" name="status"<?php if($status){echo("checked");}?>>
      <label for="status">Fertig gedoerrt</label>
    </fieldset>
          <br><input type="submit" value="Speichern">
  </form>
</div>
</body>
<script src="public/js/scriptError.js"></script>
</html>
