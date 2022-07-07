<div class="container mt-2">
    <h1>Listagem de produtos</h1>
    <hr>

    <a href="<?= base_url() . "?c=produto&m=add" ?>" class = "btn btn-success">Inserir Produto</a>
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th class = "col-6">Nome</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Foto</th>
                <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produtos as $produto):?>
                <tr>
                    <td><?php echo $produto['nome'];?></td>
                    <td><?php echo $produto['preco'];?></td>
                    <td><?php echo $produto['marca'];?></td>
                    <td><?php echo $produto['foto'];?></td>
                    <td>
                        <a href="<?= base_url() ?>?c=produto&m=excluir&id=<?php echo $produto['idproduto'];?>" class="btn btn-danger" tite="excluir">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>

                        <a href="<?= base_url() ?>?c=produto&m=editar&id=<?php echo $produto['idproduto'];?>" class="btn btn-primary" tite="editar">
                            <i class="fa-solid fa-pencil"></i>
                        </a>

                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
    </table>
</div>