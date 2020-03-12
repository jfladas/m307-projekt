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

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    $task = new Task(null, $name, $email, $phone, $_POST['category'], $_POST['fruit'], false, $frist);
    $task->create();

    header('Location: http://localhost/m307-projekt/m307-projekt/?uri=anzeige');
    //http://web.kurse.ict-bz.ch/m307_1/fruechtedoerrung_luan_gashi_lukas_bucher/?uri=anzeige

}
