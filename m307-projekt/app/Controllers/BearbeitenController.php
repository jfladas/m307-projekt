<?php
$task = Task::getById($_GET['?id']);
$id = $task->id;
$name = $task->name;
$email = $task->email;
$phone = $task->phone;
$fruit = $task->fruit;
$category = $task->category;
$status = $task->status;
require 'app/Views/bearbeiten.view.php';
