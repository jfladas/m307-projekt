<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'erfassen' => 'app/Controllers/ErfassenController.php',
    'bearbeiten' => 'app/Controllers/BearbeitenController.php',
    'anzeige' => 'app/Controllers/AnzeigeController.php',
    'task' => 'app/Controllers/TaskController.php',
    'addtask' => 'app/Controllers/AddTaskController.php',
    'edittask' => 'app/Controllers/EditTaskController.php',
    'updatetask' => 'app/Controllers/UpdateTaskController.php'
]);
