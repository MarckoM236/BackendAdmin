<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = $_POST;
    require_once CONTROLLER_PATH.$data['controller'].'Controller.php';   

    if (isset($data['function']) && isset($data['controller'])) {
        $function = $data['function'];
        $controller = $data['controller']."Controller";
        $class = new AjaxController($controller);
        $class->processRequest($function,$data);
    }
    else{
        // Si la función no está definida o no existe, retornar un error
        http_response_code(400);
        echo json_encode(array('error' => 'Función no válida'));
        exit();
    
    }

}
