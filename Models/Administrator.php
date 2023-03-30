<?php
require_once $_SERVER['DOCUMENT_ROOT'].PROJECT.'routes.php';
require_once MODEL_PATH."Connection.php";

class Administrator{
    /* -----------------------
    VALIDAR USUARIO ADMINISTRADOR
    ------------------------ */
    public static function validateAdmin($table,$item,$value){
        try{
            if($item != null){
                //$query="SELECT * FROM $table WHERE $item = :$item ORDER BY id DESC";
                $con=Connection::connect();
                $stmt=$con->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY id DESC");
                $stmt->bindParam(":".$item,$value);
                $stmt->execute();
                return $stmt->fetch();
            }
            else{
                $con= Connection::connect()->prepare("SELECT * FROM $table ORDER BY id DESC");
                $con->execute();
                return $con->fetchAll();
            }
        }
        catch(PDOException $e) {
            return false; 
        }
        
    }
}