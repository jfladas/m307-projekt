<?php

$dbConnection = null;
function db()
{
  global $dbConnection;
  if(!$dbConnection){
    try {
        $dbConnection = new PDO('mysql:host=127.0.0.1;dbname=fruechte_doerrung;charset=utf8;', 'root', '');
    } catch (PDOException $e) {
        die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
    }

    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  return $dbConnection;
}
