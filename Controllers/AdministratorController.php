<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].PROJECT.'routes.php';
require_once MODEL_PATH.'Administrator.php';

class AdministratorController{

    
    public function login($data){
        if(isset($data['email'])){
            if(strpos($data['email'], "@") && strpos($data['email'], ".") && $data['passw'] != null){
               $crypt=crypt($data['passw'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

               //data db
               $table = "administrador";
               $item = "email";
               $value = $data['email'];

               $result=Administrator::validateAdmin($table,$item,$value);
               if($result!== false){
                    if($result['email']===$data['email'] && $result['password']===$crypt){
                        if($result['estado']==1){
                            $_SESSION['validate']="ok";
                            $_SESSION['userName']=$result['nombre'];

                            //header("Location: home");
                            $response['message']="sesion OK";
                            //die();
                        }
                        else{
                            $response['message']="usuario inactivo";
                        }
                    }
                    else{
                        $response['message']="Verifique el usuario o la contraseña";
                    }
               }
               else{
                $response['message']="Datos Erroneos";
               }
    
            }
        }
        return $response;
    }

    public function logout($data){
        return session_destroy();
    }
}