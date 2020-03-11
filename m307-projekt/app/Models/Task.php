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

    public function __construct($id = null, $name = null, $email = null, $phone = null, $category = null, $fruit = null, $status = null)
    {
        $this->id        = $id;
        $this->name      = $name;
        $this->email     = $email;
        $this->phone     = $phone;
        $this->category  = $category;
        $this->fruit     = $fruit;
        $this->status    = $status;
    }

    public function create()
    {
        $statement = db()->prepare('INSERT INTO `tasks` (name, email, phone, category, fruit, status)
                                    VALUES (:name, :email, :phone, :category, :fruit, :status)');
        $statement->bindParam(':name', $this->name, PDO::PARAM_STR);
        $statement->bindParam(':email', $this->email, PDO::PARAM_STR);
        $statement->bindParam(':phone', $this->phone, PDO::PARAM_STR);
        $statement->bindParam(':category', $this->category, PDO::PARAM_INT);
        $statement->bindParam(':fruit', $this->fruit, PDO::PARAM_INT);
        $statement->bindParam(':status', 0, PDO::PARAM_BOOL);

        return $statement->execute();
    }

    public static function getAll()
    {
        $statement = db()->prepare('SELECT * FROM tasks');
        $statement->execute();

        $result = $statement->fetchAll();
        $tasks = [];
        foreach($result as $r){
          $tasks[] = Task::dbResultToTask($r);
        }
        return $tasks;
    }

    private static function dbResultToTask($r){
      return new Task($r['id'], $r['name'], $r['email'], $r['phone'], $r['fk_category'], $r['fk_fruit'], $r['status']);
    }

    public static function getById($id)
    {
        $statement = db()->prepare('SELECT * FROM tasks WHERE id = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        return Task::dbResultToTask($statement->fetch());
    }

    public function update()
    {
        $statement = db()->prepare('UPDATE `tasks` SET name = :name, email = :email, phone = :phone, fruit = :fruit, status = :status
                                    WHERE id = :id');
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':email', $this->email);
        $statement->bindParam(':phone', $this->phone);
        $statement->bindParam(':fruit', $this->fruit);
        $statement->bindParam(':status', $this->status);

        return $statement->execute();
    }

    public static function delete($id)
    {
        $statement = db()->prepare('DELETE FROM `tasks` WHERE id = :id');
        $statement->bindParam(':id', $id);

        return $statement->execute();
    }
}
