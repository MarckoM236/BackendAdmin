<?php

require_once $_SERVER['DOCUMENT_ROOT'].PROJECT.'routes.php';
require_once MODEL_PATH.'Product.php';
require_once MODEL_PATH.'Category.php';
require_once CORE_PATH.'validateProducts.php';

class ProductController{
    private $modelProduct;
    private $modelCategory;
    //private $errors=array();
    
    
    public function __construct()
    {
        $this->modelProduct = new Product();
        $this->modelCategory = new Category();
    }
        
    public function getById($data){
        $result=null;
        $product=$this->modelProduct->getProductById($data['id']);

        $category=$this->modelCategory->getCategoryById($product['id_categoria']); 
        $res['id_category']=$category['id'];
        $res['category']=$category['categoria'];
        $res['type']=$product['tipo'];
        $res['route']=$product['ruta'];
        $res['state']=$product['estado'];
        $res['title']=$product['titulo'];
        $res['detail']=$product['detalle'];
        $res['price']=$product['precio'];
        $res['descrip']=$product['descripcion'];
        $result[]= $res;
        
        
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

    public function insertProduct($data){
        $response=null;
        $result=null;
        $inputsName=array("categoria","tipo","ruta","titulo","precio");
        $inputsVal=array($data['products']['categoria'],$data['products']['tipo'],$data['products']['ruta'],$data['products']['titulo'],$data['products']['precio']);
        $validate=validateInputs($inputsVal,$inputsName);
        if($validate==null){
            $result=$this->modelProduct->createProduct($data['products']);
            if($result!== null){
                $response['message']="Se guardo el producto exitosamente"; 
                $response['data']=$result; 
            }
            else{
                $response['message']="No se pudo guardar el producto";    
            }
        }
        else{
            $response['message']="Error"; 
            $response['data']=$validate;
        }
        
        return $response;
    }

    public function updateProduct($data){
        $response=null;
        $result=null;
        if(isset($data['products']['id']) && !empty($data['products']['id'])){
            $product=$this->modelProduct->getProductById($data['products']['id']);
            
            if($product!=false){
                $inputsName=array("categoria","tipo","ruta","titulo","precio");
                $inputsVal=array($data['products']['categoria'],$data['products']['tipo'],$data['products']['ruta'],$data['products']['titulo'],$data['products']['precio']);
                $validate=validateInputs($inputsVal,$inputsName);
                if($validate==null){
                    $result=$this->modelProduct->updateProduct($data['products']);
                    if($result!== null){
                        $response['message']="Se actualizo el producto exitosamente"; 
                        $response['data']=$result; 
                    }
                    else{
                        $response['message']="No se pudo actualizar el producto";    
                    }
                }
                else{
                    $response['message']="Error"; 
                    $response['data']=$validate;
                }
            }
            else{
                $response['message']="Producto no encontrado"; 
            }
            
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