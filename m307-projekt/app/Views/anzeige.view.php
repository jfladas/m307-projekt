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

          <li><?= $task->name ?> | <?= $task->email ?> | <?= $task->phone ?> |
              <?= $task->category ?>  | <?= $task->fruit ?> | <?= $task->status ?> |
              <?= $days ?> | <a href="?uri=edittask&?id=<?= $task->id ?>">bearbeiten</a>
          </li>
      <?php endforeach; ?>
  </ul>
</body>
</html>
