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
        $result=null;
        $product=$this->modelProduct->getAllProducts();
        
        for($i=0;$i<count($product);$i++){
            $category=$this->modelCategory->getCategoryById($product[$i]['id_categoria']); 
                $res['id']=$product[$i]['id'];
                $res['category']=$category['categoria'];
                $res['title']=$product[$i]['titulo'];
                $res['descrip']=$product[$i]['descripcion'];
                $result[]= $res;
        }
        
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


    public function deleteProduct($data){
        $response=null;
        $product=false;
        $result=null;
        if(isset($data['id'])){
            $product=$this->modelProduct->getProductById($data['id']);
            
            if($product!=false){
                $result=$this->modelProduct->deleteProduct($data['id']);

                if($result!== null){
                    $response['message']="Producto Eliminado";  
                }
                else{
                    $response['message']="No se pudo eliminar el producto";    
                }
            }
            else{
                $response['message']="Producto no encontrado"; 
            }
            
        }
        return $response;
    }
}