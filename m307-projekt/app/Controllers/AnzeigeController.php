<?php
$task = new Task();
$tasks = $task->getAll();
$fruit = new Fruit();
$fruits = $fruit->getAll();
$category = new Category();
$categories = $category->getAll();
require 'app/Views/anzeige.view.php';
