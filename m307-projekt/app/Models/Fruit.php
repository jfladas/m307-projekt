<?php

class Fruit
{
    public $id;
    public $name;

    public function __construct($id = null, $name = null)
    {
        $this->id        = $id;
        $this->name      = $name;
    }

    public static function getAll()
    {
        $statement = db()->prepare('SELECT * FROM fruits');
        $statement->execute();

        $result = $statement->fetchAll();
        $fruits = [];
        foreach($result as $r){
          $fruits[] = Fruit::dbResultToFruit($r);
        }
        return $fruits;
    }

    private static function dbResultToFruit($r){
      return new Fruit($r['id'], $r['name']);
    }

    public static function getById($id)
    {
        $statement = db()->prepare('SELECT * FROM `fruits` WHERE id = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return Fruit::dbResultToFruit($statement->fetch());
    }
}
