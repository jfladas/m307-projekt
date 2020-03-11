<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Anzeigen</title>
  <link rel="stylesheet" href="public/css/app.css">
      <h1>Früchte-Dörrung Luzern</h1>
</head>
<body>
  <ul>
  <li><a href="?uri=" class='nav'>Willkommen</a></li>
  <li><a href="?uri=erfassen" class='nav'>Erfassen</a></li>
  <li><a class="active nav" href="?uri=anzeige">Anzeigen</a></li>
</ul>
<table>
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
        }?>
          <tr>
            <td><?= $task->name ?></td>
            <td><?= $task->email ?></td>
            <td><?= $task->phone ?></td>
            <td><?= $task->category ?></td>
            <td><?= $task->fruit ?></td>
            <td><?= $task->status ?></td>
            <td><?= $days ?></td>
            <td><a href="?uri=edittask&?id=<?= $task->id ?>">bearbeiten</a></td>
          </tr>
      <?php endforeach; ?>
  </table>
</body>
</html>
