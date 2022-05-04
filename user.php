
<?php

    class UserCred {
        //VARS
        private $username;
        private $correo;
        private $password;


        //CONSTRUCTOR
        public function __construct($us = "",$co = "", $ps = ""){
            $this->setUsername($us);
            $this->setCorreo($co);
            $this->setPassword($ps);
        }
        

        //FUNCTION
        //sets
        public function setUsername($us){
            $this->username = $us;
        }
        public function setCorreo($co){
            $this->correo = $co;
        }
        public function setPassword($ps){
            $this->password = $ps;
        }

        //gets
        public function getUsername(){
            return $this->username;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function getPassword(){
            return $this->password;
        }
    
        
        
        //DDESCONTRUCT
        public function __destruct(){}








    }


?>