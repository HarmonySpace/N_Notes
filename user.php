
<?php

    class UserCred {
        //VARS
        private $username;
        private $password;


        //CONSTRUCTOR
        public function __construct($us = "", $ps = ""){
            $this->setUsername($us);
            $this->setPassword($ps);
        }
        

        //FUNCTION
        //sets
        public function setUsername($us){
            $this->username = $us;
        }
        public function setPassword($ps){
            $this->password = $ps;
        }

        //gets
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        
        
        //DDESCONTRUCT
        public function __destruct(){}








    }


?>