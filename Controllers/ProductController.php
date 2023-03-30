<?php

require_once $_SERVER['DOCUMENT_ROOT'].PROJECT.'routes.php';
require_once MODEL_PATH.'Product.php';
require_once MODEL_PATH.'Category.php';

class ProductController{
    private $modelProduct;
    private $modelCategory;
    
    public function __construct()
    {
        $this->modelProduct = new Product();
        $this->modelCategory = new Category();
    }
        
    
    public function getAll($data){
        
        $product=$this->modelProduct->getAllProducts();
        
        for($i=0;$i<count($product);$i++){
            $category=$this->modelCategory->getCategoryById($product[$i]['id_categoria']); 
                $res['id']=$product[$i]['id'];
                $res['category']=$category['categoria'];
                $res['title']=$product[$i]['titulo'];
                $res['descrip']=$product[$i]['descripcion'];
                $result[]= $res;
        }
        
        if($result!== false){
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