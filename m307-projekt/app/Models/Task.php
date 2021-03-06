<?php

class Task
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $category;
    public $fruit;
    public $status;
    public $frist;

    public function __construct($id = null, $name = null, $email = null, $phone = null, $category = null, $fruit = null, $status = null, $frist = null)
    {
        $this->id        = $id;
        $this->name      = $name;
        $this->email     = $email;
        $this->phone     = $phone;
        $this->category  = $category;
        $this->fruit     = $fruit;
        $this->status    = $status;
        $this->frist     = $frist;
    }

    public function create()
    {
        $statement = db()->prepare('INSERT INTO `tasks` (name, email, phone, fk_category, fk_fruit, status, frist)
                                    VALUES (:name, :email, :phone, :category, :fruit, :status, :frist)');
        $statement->bindParam(':name', $this->name, PDO::PARAM_STR);
        $statement->bindParam(':email', $this->email, PDO::PARAM_STR);
        $statement->bindParam(':phone', $this->phone, PDO::PARAM_STR);
        $statement->bindParam(':category', $this->category, PDO::PARAM_INT);
        $statement->bindParam(':fruit', $this->fruit, PDO::PARAM_INT);
        $statement->bindParam(':status', $this->status, PDO::PARAM_BOOL);
        $statement->bindParam(':frist', $this->frist, PDO::PARAM_STR);
        return $statement->execute();
    }

    public static function getAll()
    {
        $statement = db()->prepare('SELECT * FROM `tasks` ORDER BY frist');
        $statement->execute();

        $result = $statement->fetchAll();
        $tasks = [];
        foreach($result as $r){
          $tasks[] = Task::dbResultToTask($r);
        }
        return $tasks;
    }

    private static function dbResultToTask($r){
      return new Task($r['id'], $r['name'], $r['email'], $r['phone'], $r['fk_category'], $r['fk_fruit'], $r['status'], $r['frist']);
    }

    public static function getById($id)
    {
        $statement = db()->prepare('SELECT * FROM `tasks` WHERE id = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return Task::dbResultToTask($statement->fetch());
    }

    public function update()
    {
        $statement = db()->prepare('UPDATE `tasks` SET name = :name, email = :email, phone = :phone, fk_fruit = :fruit, status = :status, frist = :frist
                                    WHERE id = :id');
        $statement->bindParam(':id', $this->id);
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':email', $this->email);
        $statement->bindParam(':phone', $this->phone);
        $statement->bindParam(':fruit', $this->fruit);
        $statement->bindParam(':status', $this->status);
        $statement->bindParam(':frist', $this->frist);
        var_dump($statement);
        return $statement->execute();
    }
}
