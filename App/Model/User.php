<?php

namespace App\Model;

class User
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $created;
    public $lastUpdated;

    public function __construct($id, $name, $email, $password, $created, $lastUpdated)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->created = $created;
        $this->lastUpdated = $lastUpdated;
    }
}
