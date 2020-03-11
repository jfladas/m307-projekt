<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Bearbeitung Dörrung</title>
  <link rel="stylesheet" href="public/css/app.css">
      <h1>Früchte-Dörrung</h1>
</head>
<body>
  <ul>
  <li><a href="?uri=" class='nav'>Willkommen</a></li>
  <li><a href="?uri=erfassen" class='nav'>Erfassen</a></li>
  <li><a href="?uri=anzeige" class='nav'>Anzeigen</a></li>
</ul>
<div class="bearbeitung">
  <form action="?uri=updatetask&?id=<?=$id?>" method="post">
<br><br>
    <fieldset>
      <legend>Angaben zur Person</legend>
      <label for="name">Name</label><br>
      <input type="text" id="name" name="name" required value=<?=$name?>><br><br>
      <label for="email">Email</label><br>
      <input type="email" id="email" name="email" required value=<?=$email?>><br><br>
      <label for="phone">Telefon</label><br>
      <input type="tel" id="phone" name="phone" pattern="^(0|0041|\+41)?[1-9\s][0-9\s]{1,12}$" value=<?=$phone?>><br><br>
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
      <input type="checkbox" id="status" name="status"<?php if($status){echo("checked");}?>>
      <label for="status">Fertig gedoerrt</label>
    </fieldset>
          <br><input type="submit" value="Speichern">
  </form>
</div>
</body>
</html>
