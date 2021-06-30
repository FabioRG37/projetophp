<?php require '../src/View/cabecalho.php'; ?>

    <h1>Dados do Serviço</h1>

    <form method="post" action="/servicos/editar/ <?= $resultado['id'] ?> ">
        <div class="row">
            <div class="col-6">
                <label for="descricao">Nome do Serviço:</label>
                <input type="text" name="descricao" class="form-control" value="<?= $resultado['descricao'] ?>"/>
            </div>
            <div class="col-3">
                <label for="preco">Preço do Serviço:</label>
                <input type="number" name="preco" class="form-control" value="<?= number_format($resultado['preco'], '2', ',', '.') ?>"/>
            </div>
        </div>
    </form>

<?php require '../src/View/rodape.php'; ?>