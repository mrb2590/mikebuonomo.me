<?php

namespace App\Model;

use MiniMVC\Model\SQLTable;

class UserTable extends SQLTable
{
    public function getAll()
    {
        $sql = "SELECT * FROM user";
        $rows = $this->mysqli->query($sql);
        $users = array();
        foreach ($rows as $row)
        {
            $users[] = new User(
                $row['id'],
                $row['name'],
                $row['email'],
                $row['password'],
                $row['created'],
                $row['last_updated']
            );
        }
        return $users;
    }

    public function getOne($userId)
    {
        $sql = "SELECT * FROM user WHERE id='$userId'";
        $row = $this->mysqli->query($sql)->fetch_assoc();
        $user = new User(
            $row['id'],
            $row['name'],
            $row['email'],
            $row['password'],
            $row['created'],
            $row['last_updated']
        );
        return $user;
    }

    public function save(User $user)
    {
        
    }

    public function delete(User $user)
    {
        
    }
}
