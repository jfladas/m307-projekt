<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'erfassen' => 'app/Controllers/ErfassenController.php',
    'anzeige' => 'app/Controllers/AnzeigeController.php',
    'addtask' => 'app/Controllers/AddTaskController.php',
    'edittask' => 'app/Controllers/BearbeitenController.php',
    'updatetask' => 'app/Controllers/UpdateTaskController.php'
]);
