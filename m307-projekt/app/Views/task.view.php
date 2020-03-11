<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>

  <ul>
      <?php foreach ($tasks as $task): ?>
          <li><?= $task->name ?> | <?= $task->email ?> | <?= $task->phone ?> | <?= $task->category ?>  | <?= $task->fruit ?> | <?= $task->status ?>
      <?php endforeach; ?>
  </ul>

<script src="public/js/app.js"></script>
</body>
</html>
