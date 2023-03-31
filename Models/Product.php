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
            $image="image.jpg";
            $stmt=$this->con->prepare("INSERT INTO productos (id_categoria, tipo, ruta, estado, titulo, detalle, precio, foto, descripcion, fecha) VALUES (?,?,?,1,?,?,?,?,?,now())");
            $stmt->bindParam(1,$productData['categoria']);
            $stmt->bindParam(2,$productData['tipo']);
            $stmt->bindParam(3,$productData['ruta']);
            $stmt->bindParam(4,$productData['titulo']);
            $stmt->bindParam(5,$productData['detalle']);
            $stmt->bindParam(6,$productData['precio']);
            //$stmt->bindParam("?",$productData['foto']);
            $stmt->bindParam(7,$image);
            $stmt->bindParam(8,$productData['descripcion']);
            return $stmt->execute();
        }
    
        public function updateProduct($productData) {
           
        }
    
        public function deleteproduct($id) {
            $stmt = $this->con->prepare("DELETE FROM productos WHERE id=".$id);
            return $stmt->execute();
        }
    }
    
