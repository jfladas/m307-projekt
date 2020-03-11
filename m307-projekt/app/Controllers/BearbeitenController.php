<?php
$task = Task::getById($_GET['id']);
require 'app/Views/bearbeiten.view.php';
