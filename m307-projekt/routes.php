<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'task' => 'app/Controllers/TaskController.php',
    'addtask' => 'app/Controllers/AddTaskController.php',
    'edittask' => 'app/Controllers/EditTaskController.php',
    'updatetask' => 'app/Controllers/UpdateTaskController.php'
]);
