<?php
$task = Task::getById($_GET['?id']);
$id = $task->id;
$name = $task->name;
$email = $task->email;
$phone = $task->phone;
$fru = $task->fruit;
$cat = $task->category;
$status = $task->status;
$frist = $task->frist;


$fruit = new Fruit();
$fruits = $fruit->getAll();
$category = new Category();
$categories = $category->getAll();
require 'app/Views/bearbeiten.view.php';
