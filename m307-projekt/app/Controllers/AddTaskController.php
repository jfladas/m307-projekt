<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  switch ($_POST['category']) {
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
    $frist = date("d.m.Y", strtotime("+ $days Days"));

    $task = new Task(null, $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['category'], $_POST['fruit'], false, $frist);
    $task->create();

    header('Location: http://localhost/m307-projekt/m307-projekt/?uri=anzeige');
}
