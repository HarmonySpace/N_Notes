
<?php
    include_once 'user.php';

    if(isset($_POST["crear"])){
        $list = Storages::pusheadatos();
        try{
            $us = new UserCred($_POST["username"], $_POST["correo"], $_POST["password"]);
        }
        catch(Exception $e){
            echo "ERROR: ".$e->getMessage();
        }
        array_push($list, $us);
        $result = Storages::ingresardatos($list);
        if ($result){
            
        }

    }else{
        echo "<h1>NO ONE HERE</h1>";
    }















?>