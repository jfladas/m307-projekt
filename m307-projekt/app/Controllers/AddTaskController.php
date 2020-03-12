<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    $task = new Task(null, $name, $email, $phone, $_POST['category'], $_POST['fruit'], false, $_POST['frist']);
    $task->create();

    header('Location: http://web.kurse.ict-bz.ch/m307_1/fruechtedoerrung_luan_gashi_lukas_bucher/?uri=anzeige');

}
