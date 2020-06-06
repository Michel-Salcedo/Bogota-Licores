<?php
// PDO
class DB{

    public static function connect(){
        try{
           $pdo= new PDO('mysql:host=localhost;dbname=bogota_licores;charset=utf8','root','12345');
           $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

           return $pdo;
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
    // PDO::ATTR_ERRMODE
    // PDO::ERRMODE_EXCEPTION
}
?>