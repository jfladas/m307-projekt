<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Meine Seite</title>
  <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
  <form action="/?uri=bearbeiten" method="post">
    <fieldset>
      <legend>Angaben zur Person</legend>
      <label for="fname">Name:</label><br>
      <input type="text" id="fname" name="fname" required><br><br>
      <label for="lname">Email:</label><br>
      <input type="email" id="lname" name="lname" required><br><br>
      <label for="phone">Telefon:</label><br>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>
    </fieldset>
    <fieldset>
      <legend>Angaben zur Bestellung</legend>
      <label for="menge">Mengenkategorie:</label><br>
      <input type="text" id="menge" name="menge" readonly><br><br>
              <label for="frucht">Frucht:</label><br>
              <select name="frucht">
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
                      <label for="doerrung">Fertig gedoerrt:</label><br>
                      <input type="checkbox" id="gedoerrt" name="vehicle1">
    </fieldset>
          <input type="submit" value="Speichern">
  </form>
</body>
</html>
