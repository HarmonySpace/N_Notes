
<?php

class Storages
{
    public static function ingresa_datos($listaUsuarios)
    {
        try {
            $almac_arra = serialize($listaUsuarios);
            file_put_contents("archivoUsuario", $almac_arra);
            return true;
        } catch (Exception $e) {
            echo "Excepción ocurrida de tipo: " . $e->getMessage();
            return false;
        }
    }
    public static function retorna_datos(){
        try{
            $almac_arra= file_get_contents("archivoUsuario");
            $usuario=unserialize($almac_arra);
            if(!is_array($usuario)){
                $usuario=array();
            }
        }catch(Exception $e){
            $usuario=array();
        }
        return $usuario;
    }
}


?>