<?php
    class User
    {
        public $username;
        public $password;
        public $firstname;
        public $lastname;

        public function inthongtin()
        {
            echo"Ban $this->firstname $this->lastname co ten tai khoan la $this->username";
        }

       
    } 
    $Meo = new User();
    $Meo->username = "Meo123";
    $Meo->password = "123456";
    $Meo->firstname = "Meo";
    $Meo->lastname = "Le";
    $Meo->inthongtin();
?>