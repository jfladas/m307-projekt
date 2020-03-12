<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <title>Anzeigen</title>
  <link rel="stylesheet" href="public/css/app.css">
    <h1><a href="?uri=" class="titel">FruttiTutti</a></h1>
      <ul>
      <li><a href="?uri=" class='nav'>Willkommen</a></li>
      <li><a href="?uri=erfassen" class='nav'>Erfassen</a></li>
      <li><a class="active nav" href="?uri=anzeige">Anzeigen</a></li>
</head>

</ul>
<body>
<form action="?uri=updatetask&?x=1" method="post">
<table>
  <tr>
    <th></th>
    <th>Name</th>
    <th>Email</th>
    <th>Telefon</th>
    <th>Mengenkategorie</th>
    <th>Frucht</th>
    <th>Datum der Fertigstellung</th>
    <th>Status</th>
    <th></th>

  </tr>
      <?php
      $i=1;
      foreach ($tasks as $task):
        $id = $task->id;
        $name = $task->name;
        $email = $task->email;
        $phone = $task->phone;
        $fru = $task->fruit;
        $cat = $task->category;
        $status = $task->status;
        $frist = $task->frist;

        $infrist = $frist > date("d.m.Y");
        if($infrist){
          $infrist = '🍎';
        }else {
          $infrist = '🥔';
        }

        if(!$status){?>
          <tr>
            <td><input type="checkbox" name="status<?=$i?>" value="<?= $id ?>"></td>
            <td><?= $name ?></td>
            <td><?= $email ?></td>
            <td><?= $phone ?></td>
            <td><?= $categories[$cat-1]->name ?></td>
            <td><?= $fruits[$fru-1]->name ?></td>
            <td><?= $frist ?></td>
            <td><?= $infrist ?></td>
            <td><a href="?uri=edittask&?id=<?= $id ?>">✏️</a></td>
          </tr>
      <?php $i++;}endforeach; ?>
  </table><br>
  <input type="submit" value="Ausgewählte Aufträge abschliessen">
</form>
</body>
</html>
