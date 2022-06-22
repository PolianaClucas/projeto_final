<?php
    require "../conexao.php";
    require "../model/categoria_model.php";

    $model = new categoriaModel($con); 
    //$model->inserir("Produto de limpeza");
    //$model->excluir(3);
    //$model->atualizar("Smartphone", 2);
    var_dump($model->buscarPorId(2));
?>