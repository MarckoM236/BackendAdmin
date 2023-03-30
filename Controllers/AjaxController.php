<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/PHP/backendMVC'.'/routes.php';
require_once CONTROLLER_PATH.'Request/requestController.php';

class AjaxController{

    private $class;
    
    public function __construct($class) {
        // Crear una instancia del modelo
        $this->class = new $class;
    }

    public function processRequest($function,$data) {
                // Verificar si la función existe en el controlador
                if (method_exists($this->class, $function)) {
                    // Llamar a la función del controlador y pasarle los datos de la petición
                    $result = $this->class->$function($data);

                    // Retornar el resultado como respuesta en formato JSON
                    http_response_code(200);
                    echo json_encode($result);
                }       
    }

}


