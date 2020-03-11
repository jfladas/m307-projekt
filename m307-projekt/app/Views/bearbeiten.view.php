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
                  <option value="1"<?php if($category == '1'){echo("selected");}?>>0-5 kg</option>
                  <option value="2"<?php if($category == '2'){echo("selected");}?>>5-10 kg</option>
                  <option value="3"<?php if($category == '3'){echo("selected");}?>>10-15 kg</option>
                  <option value="4"<?php if($category == '4'){echo("selected");}?>>15-20 kg</option>
              </select><br><br>
      <label for="fruit">Frucht</label><br>
      <select name="fruit">
                  <option value="1"<?php if($fruit == '1'){echo("selected");}?>>Ananas</option>
                  <option value="2"<?php if($fruit == '2'){echo("selected");}?>>Aepfel</option>
                  <option value="3"<?php if($fruit == '3'){echo("selected");}?>>Aprikose</option>
                  <option value="4"<?php if($fruit == '4'){echo("selected");}?>>Avocado</option>
                  <option value="5"<?php if($fruit == '5'){echo("selected");}?>>Bananen</option>
                  <option value="6"<?php if($fruit == '6'){echo("selected");}?>>Birne</option>
                  <option value="7"<?php if($fruit == '7'){echo("selected");}?>>Blondorange</option>
                  <option value="8"<?php if($fruit == '8'){echo("selected");}?>>Blutorange</option>
                  <option value="9"<?php if($fruit == '9'){echo("selected");}?>>Brombeeren</option>
                  <option value="10"<?php if($fruit == '10'){echo("selected");}?>>Clementinen</option>
                  <option value="11"<?php if($fruit == '11'){echo("selected");}?>>Erdbeeren</option>
                  <option value="12"<?php if($fruit == '12'){echo("selected");}?>>Feigen Frisch</option>
                  <option value="13"<?php if($fruit == '13'){echo("selected");}?>>Grapefruits</option>
                  <option value="14"<?php if($fruit == '14'){echo("selected");}?>>Heidelbeeren</option>
                  <option value="15"<?php if($fruit == '15'){echo("selected");}?>>Himbeeren</option>
                  <option value="16"<?php if($fruit == '16'){echo("selected");}?>>Johannisbeern</option>
                  <option value="17"<?php if($fruit == '17'){echo("selected");}?>>Kaki</option>
                  <option value="18"<?php if($fruit == '18'){echo("selected");}?>>Kirschen</option>
                  <option value="19"<?php if($fruit == '19'){echo("selected");}?>>Kiwi</option>
                  <option value="20"<?php if($fruit == '20'){echo("selected");}?>>Kiwi Bio Schweiz</option>
                  <option value="21"<?php if($fruit == '21'){echo("selected");}?>>Limetten</option>
                  <option value="22"<?php if($fruit == '22'){echo("selected");}?>>Litschis</option>
                  <option value="23"<?php if($fruit == '23'){echo("selected");}?>>Mango</option>
                  <option value="24"<?php if($fruit == '24'){echo("selected");}?>>Melonen</option>
                  <option value="25"<?php if($fruit == '25'){echo("selected");}?>>Mirabellen</option>
                  <option value="26"<?php if($fruit == '26'){echo("selected");}?>>Nektarinen</option>
                  <option value="27"<?php if($fruit == '27'){echo("selected");}?>>Papaya</option>
                  <option value="28"<?php if($fruit == '28'){echo("selected");}?>>Pfirsiche</option>
                  <option value="29"<?php if($fruit == '29'){echo("selected");}?>>Pflaumen</option>
                  <option value="30"<?php if($fruit == '30'){echo("selected");}?>>Preiselbeeren</option>
                  <option value="31"<?php if($fruit == '31'){echo("selected");}?>>Quitten</option>
                  <option value="32"<?php if($fruit == '32'){echo("selected");}?>>Stachelbeeren</option>
                  <option value="33"<?php if($fruit == '33'){echo("selected");}?>>Trauben</option>
                  <option value="34"<?php if($fruit == '34'){echo("selected");}?>>Kirschen</option>
                  <option value="35"<?php if($fruit == '35'){echo("selected");}?>>Zwetschgen</option>
              </select><br><br>
              <input type="checkbox" id="status" name="status"<?php if($status){echo("checked");}?>>
              <label for="status">Fertig gedoerrt</label>
    </fieldset>
          <br><input type="submit" value="Speichern">
  </form>
</body>
</html>
