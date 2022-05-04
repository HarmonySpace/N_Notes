
<?php
    include_once 'user.php';

    if(isset($_POST["crear"])){
        $us = new UserCred($_POST["username"], $_POST["correo"], $_POST["password"]);
    }else{
        echo "<h1>NO ONE HERE</h1>";
    }




















?>