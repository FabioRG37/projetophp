<?php require '../src/View/cabecalho.php'; ?>

    <h1>Alterar Serviço</h1>

    <form method="post" action="/servicos/editar/ <?= $resultado['id'] ?> ">

        <div class="row">
            <div class="col-6">
                <label for="descricao">Nome do Serviço:</label>
                <input type="text" name="descricao" class="form-control" value="<?= $resultado['descricao'] ?>"/>
            </div>
            <div class="col-2">
                <label for="preco">Preço do Serviço:</label>
                <input type="number" name="preco" class="form-control" value="<?= $resultado['preco'] ?>"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" name="btnInserir" class="btn btn-primary" value="Inserir">Inserir</button>
            </div>
        </div>
    </form>

<?php require '../src/View/rodape.php'; ?>