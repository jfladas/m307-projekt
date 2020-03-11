<?php

$status = (bool)$_POST['status'] ?? false;

$task = new Task($_GET['id'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['category'], $_POST['fruit'], $status);
$task->update();

header('Location: task'); // Besser: header('Location: http://localhost/deinProjekt/task);
