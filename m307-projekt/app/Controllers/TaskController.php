<?php
$task = new Task();
$tasks = $task->getAll();

require 'app/Views/task.view.php';
