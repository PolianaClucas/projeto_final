<?php
    
    require "model/CategoriaModel.php";

    class Categoria{
        function __construct(){
            $this->model = new CategoriaModel();
        }

        function index(){
            var_dump($this->model->buscarPorId(2));
        }

        function inserir(){
            echo "testando função inserir";
        }
    }



    
    //$model->inserir("Produto de limpeza");
    //$model->excluir(3);
    //$model->atualizar("Smartphone", 2);
    
?>