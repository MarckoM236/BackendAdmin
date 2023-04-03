<?php

require_once $_SERVER['DOCUMENT_ROOT'].PROJECT.'routes.php';
require_once MODEL_PATH.'Category.php';

class CategoryController{
    private $modelCategory;
    //private $errors=array();
    
    
    public function __construct()
    {
        $this->modelCategory = new Category();
    }

    public function getAll($data){
        $response= null;
        $result=$this->modelCategory->getAllCategorys(); 
       
        
        if($result!== null){
            $response['message']="OK";
            $response['data']=$result;
        }
        else{
            $response['message']="No hay productos disponibles";
            $response['data']=NULL;
        }
        return $response;

    }

}