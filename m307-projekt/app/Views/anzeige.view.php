<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Anzeigen</title>
  <link rel="stylesheet" href="public/css/app.css">
      <h1>Früchte-Dörrung</h1>
</head>
<body>
  <ul>
  <li><a href="?uri=" class='nav'>Willkommen</a></li>
  <li><a href="?uri=erfassen" class='nav'>Erfassen</a></li>
  <li><a class="active nav" href="?uri=anzeige">Anzeigen</a></li>
</ul>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Telefon</th>
    <th>Mengenkategorie</th>
    <th>Frucht</th>
    <th>Dörr-Status</th>
    <th>Datum der Fertigstellung</th>
    <th></th>
  </tr>
      <?php
      foreach ($tasks as $task):
      switch ($task->category) {
        case '1':
          $days = 5;
        break;
        case '2':
          $days = 8;
        break;
        case '3':
          $days = 12;
        break;
        case '4':
          $days = 18;
        break;
        default:
          $days = 5;
          break;
        }
        switch ($task->status) {
          case false:
            $status = '🍎';
          break;
          case true:
            $status = '🥔';
          break;
          default:
            $status = '🍎';
            break;
          }
        ?>
          <tr>
            <td><?= $task->name ?></td>
            <td><?= $task->email ?></td>
            <td><?= $task->phone ?></td>
            <td><?= $categories[$task->category]->name ?></td>
            <td><?= $fruits[$task->fruit]->name ?></td>
            <td><?= $status ?></td>
            <td><?= date("d.m.Y", strtotime("+ $days Days")) . "<br>"; ?></td>
            <td><a href="?uri=edittask&?id=<?= $task->id ?>">✏️</a></td>
          </tr>
      <?php endforeach; ?>
  </table>
</body>
</html>
