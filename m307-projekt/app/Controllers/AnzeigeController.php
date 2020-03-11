<?php
$task = new Task();
$tasks = $task->getAll();
require 'app/Views/anzeige.view.php';
