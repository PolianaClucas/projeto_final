   <div class="container">
      <h1>Cadastro de Produto</h1>
      <hr>

      <form method = "POST" action = "<?= base_url() . "?c=produto&m=salvar"?>">

      <div class="mb-3">
         <label for="categoria" class="form-label">Nome</label>
         <input type="text" class="form-control" id="categoria" name = "categoria"  value="<?= $categoria['nome'] ?? '' ?>">
      </div>
      <input type = "hidden" name = 'idcategoria' value="<?= $categoria['idcategoria'] ?? '' ?>">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
   </div>


    