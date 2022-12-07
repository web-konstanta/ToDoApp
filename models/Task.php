<?php

class Task
{
    public static function getTasksList()
    {
        $db = Db::getConnection();
        $tasks = [];
        $result = $db->query('SELECT id, name, description, date
                                FROM tasks ORDER BY id ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $tasks[$i]['id'] = $row['id'];
            $tasks[$i]['name'] = $row['name'];
            $tasks[$i]['description'] = $row['description'];
            $tasks[$i]['date'] = $row['date'];
            $i++;
        }

        return $tasks;
    }

    public static function getTaskById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM tasks WHERE id = '.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public static function create($name, $description)
    {
        $db = Db::getConnection();

        $sql = 'INSERT INTO tasks (name, description) VALUES (:name, :description)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);

        if ($result->execute()) {
            header('Location: /');
        }
        die('failed to add');
    }

    public static function update($id, $name, $description)
    {
        $db = Db::getConnection();

        $sql = 'UPDATE tasks
            SET
                name = :name,
                description = :description
            WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);

        $result->execute();
    }

    public static function delete($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $sql = 'DELETE FROM tasks WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            return $result->execute();
        }
    }

    public static function truncate()
    {
        $db = Db::getConnection();

        $sql = 'TRUNCATE tasks';
        $result = $db->prepare($sql);

        return $result->execute();
    }
}