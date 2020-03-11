<?php
$task = new Task();
$tasks = $task->getAll();
require 'app/Views/erfassen.view.php';
