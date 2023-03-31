<?php
require_once $_SERVER['DOCUMENT_ROOT'].PROJECT.'routes.php';
require_once MODEL_PATH."Connection.php";

class Product{
    
        private $con;
    
        public function __construct() {
            $this->con = Connection::connect();
        }
    
        public  function getProductById($id) {
            $stmt = $this->con->prepare("SELECT * FROM productos WHERE id=".$id);
            $stmt->execute();
            return $stmt->fetch();
        }
    
        public  function getAllProducts() {
            $stmt = $this->con->prepare("SELECT * FROM productos ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        }
    
        public function createProduct($productData) {
            
        }
    
        public function updateProduct($productData) {
           
        }
    
        public function deleteproduct($id) {
            $stmt = $this->con->prepare("DELETE FROM productos WHERE id=".$id);
            return $stmt->execute();
        }
    }
    
