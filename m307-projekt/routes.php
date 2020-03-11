<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'erfassen' => 'app/Controllers/ErfassenController.php',
    'bearbeiten' => 'app/Controllers/BearbeitenController.php',
    'anzeige' => 'app/Controllers/AnzeigeController.php'
]);
