<?php
$base_url = "http://localhost/projeto_final/index.php";
if(isset($_GET['c'])){
    $controller = ucfirst($_GET['c']);
    $path_controller = "controller/$controller.php";

    if(file_exists($path_controller)){
        require $path_controller;

            $metodo = $_GET['m'] ?? "index";
            $obj = new $controller();

            if(is_callable(array($obj, $metodo))){
                call_user_func_array(array($obj, $metodo), array());
            }
        
    }
}

function base_url(){
    global $base_url;
    return $base_url;
}
 
?>