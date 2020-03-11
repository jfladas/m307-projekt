<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $task = new Task(null, $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['category'], $_POST['fruit'], false);
    $task->create();

    header('Location: http://localhost/m307-projekt/m307-projekt/task);
}
