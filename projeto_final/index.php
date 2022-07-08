<?php

$base_url = 'catalogoif.epizy.com/index.php';
$controlador = ucfirst($_GET['c'] ?? 'home');
$metodo = $_GET['m'] ?? 'index';

$caminho_controlador = "controller/$controlador.php";
if(file_exists($caminho_controlador)){
    require $caminho_controlador;
    $objController = new $controlador();
    $id =$_GET['id'] ?? null;
    if(is_callable(array($objController, $metodo))){
        call_user_func_array(array($objController, $metodo), array($id));
    };
}

function base_url(){
    global $base_url;
    return $base_url ;
}

?>