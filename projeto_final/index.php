<?php
$base_url = "http://localhost/poliana/projeto_final/index.php";
if(isset($_GET['c'])){
    $controlador_padrao = "categoria";
    $controller = ucfirst($_GET['c'] ?? $controlador_padrao);
    $path_controller = "controller/$controller.php"; //path_controller equivale à "caminho_controlador"
    //nos códigos da video aula.

    if(file_exists($path_controller)){
        require $path_controller;

            $metodo = $_GET['m'] ?? "index";
            $obj = new $controller(); //A variável $obj equivale a $objcontroller dos videos
            $id = $_GET['id'] ?? null;

            if(is_callable(array($obj, $metodo))){
                call_user_func_array(array($obj, $metodo), array($id));
            }
        
    }
}

function base_url(){
    global $base_url;
    return $base_url;
}
 
?>