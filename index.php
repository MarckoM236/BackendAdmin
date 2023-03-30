<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/PHP/backendMVC'.'/routes.php';
require_once CONTROLLER_PATH."TemplateController.php";
require_once MODEL_PATH.'Administrator.php';
require_once CONTROLLER_PATH.'AdministratorController.php';

$template=new TemplateController();
$template->CtrTemplate();  

 
