<?php

function validateInputs($data,$inputs){
    $cont=0;
    $result=array();
    for($i=0;$i<count($data);$i++){
        if(isset($data[$i]) && !empty($data[$i])){
            $cont=$cont+1;
        }
        else{
           $result[]= errorsMessages($i,$inputs);
        }
    }
    if($cont>=count($data)){
        $result=null;
    }

    return $result;

}

function errorsMessages($i,$inputs){
    return $errors="El campo ".$inputs[$i]." es obligatorio";
}
?>