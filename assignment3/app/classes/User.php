<?php

namespace App\Classes;
class User {
    public $name;
    public $email;
    public $password;

    public $balance = 0;

    public $transactions = [];
    public function __construct($name, $email, $pass) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $pass;
    }
    public function save($data){
        file_put_contents('data/users.json', json_encode($data));
        echo "Registration Success. Login Now \n";
    }
}

