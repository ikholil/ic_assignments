<?php

namespace App\Classes;

class Bank
{
    public $users = [];

    public function __construct(){
        $this->LoadUsers();
    }
    public function run()
    {      
        while (true) {
            echo "Welcome to my Bank \n";
            echo "1. Login \n";
            echo "2. Register \n";
            echo "3. Exit \n";

            $authChoice = intval(readline("Enter Option : \n"));

            switch ($authChoice) {
                case 1:
                    $loginEmail = readline("Enter Email : ");
                    $loginPass = readline("Enter Password : ");
                    $isLoggedIn = $this->Login($loginEmail, $loginPass);
                    if (!$isLoggedIn) {
                        echo"Incorrect Credentials";
                    } else{
                        echo "Login Success \n";

                        while (true) {
                            echo "
                            1. View Transactions \n
                            2. Deposit \n
                            3. Withdraw \n
                            4. Transfer Money \n
                            5. See Balance \n
                            6. Exit \n
                            ------------------- \n
                            ";

                            $userChoice = intval(readline("Enter Option : \n"));
                            switch ($userChoice) {
                                case 1:
                                    break;
                                case 2:
                                    
                                    break;
                                case 3:
                                    break;
                                case 4: 
                                    break;
                                case 5:
                                    break;
                                case 6:
                                    break;
                                default :
                                    echo "Invalid input \n";    
                            }


                        }
                    }
                    break;
                case 2:
                    $regName = readline("Enter Name : ");
                    $regEmail = readline("Enter Email : ");
                    $regPass = readline("Enter Password : ");
                    $user = new User($regName, $regEmail, $regPass);

                    if (!is_array($this->users)) {
                        $this->users = [];
                    }

                    array_push($this->users, $user);
                    $user->save($this->users);
                    break;
                case 3: 
                    return;
                default:
                    echo "Invalid Input \n";
                    break;
            }
        }
    }

    public function LoadUsers(): void {
        $fileName = "data/users.json";
        if(file_exists($fileName)){
            $data = json_decode(file_get_contents($fileName),true);
            $this->users = $data;
        }
    }

    public function Login($email,$password) {
        foreach ($this->users as $user) {
            if($user['email'] === $email && $user['password']=== $password){
                return true;
            }

        }
        return false;
    }

    public function depositMoney($amount, $email){
        if(is_numeric($amount)){
            $fileName = "data/users.json";       
            $users = json_decode(file_get_contents($fileName),true);
            foreach($users as $user){
                if($user['email'] === $email){
                    $user->balance += $amount;
                }
            }
        } else{
            echo'Invalid Input';
        }
        }

}
