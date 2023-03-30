<?php
require_once $_SERVER['DOCUMENT_ROOT'].PROJECT.'/routes.php';
require_once MODEL_PATH."Connection.php";

class Category{
    
        private $con;
    
        public function __construct() {
            $this->con = Connection::connect();
        }
    
        public  function getCategoryById($id) {
            $stmt = $this->con->prepare("SELECT * FROM categorias WHERE id='".$id."'");
            $stmt->execute();
            return $stmt->fetch();
        }
    
        public  function getAllCategorys() {
            $stmt = $this->con->prepare("SELECT * FROM categorias ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        }
    
        public function createCategory($CategoryData) {
            
        }
    
        public function updateCategory($CategoryData) {
           
        }
    
        public function deleteCategory($id) {
            
        }
    }
    
