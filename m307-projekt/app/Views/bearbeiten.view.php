<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Meine Seite</title>
  <link rel="stylesheet" href="public/css/app.css">
      <h1>Früchte-Dörrung Luzern</h1>
</head>
<body>
  <ul>
  <li><a href="?uri=" class='nav'>Willkommen</a></li>
  <li><a href="?uri=erfassen" class='nav'>Erfassen</a></li>
  <li><a href="?uri=anzeige" class='nav'>Anzeigen</a></li>
</ul>
  <form action="?uri=updatetask&?id=<?= $task->id ?>" method="post">
<br><br>
    <fieldset>
      <legend>Angaben zur Person</legend>
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br><br>
      <label for="phone">Telefon:</label><br>
      <input type="tel" id="phone" name="phone" pattern="^(0|0041|\+41)?[1-9\s][0-9\s]{1,12}$"><br><br>
    </fieldset>
    <br>
    <fieldset>
      <legend>Angaben zur Bestellung</legend>
      <label for="category">Mengenkategorie:</label><br>
      <input type="text" id="category" name="category" readonly><br><br>
              <label for="fruit">Frucht:</label><br>
              <select name="fruit">
                          <option value="1">Ananas</option>
                          <option value="2">Aepfel</option>
                          <option value="3">Aprikose</option>
                          <option value="4">Avocado</option>
                          <option value="5">Bananen</option>
                          <option value="6">Birne</option>
                          <option value="7">Blondorange</option>
                          <option value="8">Blutorange</option>
                          <option value="9">Brombeeren</option>
                          <option value="10">Clementinen</option>
                          <option value="11">Erdbeeren</option>
                          <option value="12">Feigen Frisch</option>
                          <option value="13">Grapefruits</option>
                          <option value="14">Heidelbeeren</option>
                          <option value="15">Himbeeren</option>
                          <option value="16">Johannisbeern</option>
                          <option value="17">Kaki</option>
                          <option value="18">Kirschen</option>
                          <option value="19">Kiwi</option>
                          <option value="20">Kiwi Bio Schweiz</option>
                          <option value="21">Limetten</option>
                          <option value="22">Litschis</option>
                          <option value="23">Mango</option>
                          <option value="24">Melonen</option>
                          <option value="25">Mirabellen</option>
                          <option value="26">Nektarinen</option>
                          <option value="27">Papaya</option>
                          <option value="28">Pfirsiche</option>
                          <option value="29">Pflaumen</option>
                          <option value="30">Preiselbeeren</option>
                          <option value="31">Quitten</option>
                          <option value="32">Stachelbeeren</option>
                          <option value="33">Trauben</option>
                          <option value="34">Kirschen</option>
                          <option value="35">Zwetschgen</option>
                      </select><br>
                      <label for="status">Fertig gedoerrt:</label><br>
                      <input type="checkbox" id="status" name="status">
    </fieldset>
          <br><input type="submit" value="Speichern">
  </form>
</body>
</html>
