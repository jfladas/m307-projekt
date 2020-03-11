<?php

class Category
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
        $statement = db()->prepare('SELECT * FROM categories');
        $statement->execute();

        $result = $statement->fetchAll();
        $categories = [];
        foreach($result as $r){
          $categories[] = Category::dbResultToCategory($r);
        }
        return $categories;
    }

    private static function dbResultToCategory($r){
      return new Category($r['id'], $r['name']);
    }

    public static function getById($id)
    {
        $statement = db()->prepare('SELECT * FROM `categories` WHERE id = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return Category::dbResultToCategory($statement->fetch());
    }
}
