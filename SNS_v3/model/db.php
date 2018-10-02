<?php
class db 
{
private $pdo=NULL;
   public function conectar()
   {
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=sns1;charset=utf8','root','');

            return $pdo;
        }catch(PDOException $e){
            die($e->getMessage());
        }
   } 
}
