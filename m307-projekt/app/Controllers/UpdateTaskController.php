<?php
if($_GET['?x']){
  foreach ($_POST as $x) {
    $task = Task::getById($x);
    $name = $task->name;
    $email = $task->email;
    $phone = $task->phone;
    $fru = $task->fruit;
    $cat = $task->category;
    $frist = $task->frist;
    $task = new Task($x, $name, $email, $phone, $fru, $cat, 1, $frist);
    $task->update();
  }
}else{
  $status = (bool)$_POST['status'] ?? false;
  $task = new Task($_GET['?id'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['category'], $_POST['fruit'], $status, $_POST['frist']);
  $task->update();
}

header('Location: http://localhost/m307-projekt/m307-projekt/?uri=anzeige');
//http://web.kurse.ict-bz.ch/m307_1/fruechtedoerrung_luan_gashi_lukas_bucher/?uri=anzeige
