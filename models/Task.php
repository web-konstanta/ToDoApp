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
}