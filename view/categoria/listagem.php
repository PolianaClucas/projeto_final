<div class="container mt-2">
    <h1>Listagem de Categorias</h1>
    <hr>

    
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th class="col-10">Nome</th>
                 <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $categoria):?>
                <tr>
                    <td><?php echo $categoria['nome'];?></td>
                    <td>
                        <a href="<?= base_url() ?>?c=categoria&m=excluir&id=<?php echo $categoria['idcategoria'];?>" class="btn btn-danger" tite="excluir">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>

                        <a href="http://" class="btn btn-primary" tite="editar">
                            <i class="fa-solid fa-pencil"></i>
                        </a>

                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
    </table>
</div>