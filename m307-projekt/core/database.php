<?php

$dbConnection = null;
function db()
{
  global $dbConnection;
  if(!$dbConnection){
    try {
        $dbConnection = new PDO('mysql:host=127.0.0.1;dbname=fruechte_doerrung;charset=utf8;', 'root', '');
        //PDO('mysql:host=localhost;dbname=kurseictbz_30713;charset=utf8;', 'kurseictbz_30713', 'db_307_pw_13');
    } catch (PDOException $e) {
        die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
    }

    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  return $dbConnection;
}
