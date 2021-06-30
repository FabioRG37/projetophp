<?php require '../src/View/cabecalho.php'; ?>

    <h1>Excluir Serviço</h1>

    <form method="post" action="/servicos/remover/ <?= $resultado['id'] ?> ">

        <div class="row">
            <div class="col">
                <label for="descricao">Nome do Serviço:</label>
                <input type="text" name="descricao" class="form-control" value="<?= $resultado['descricao'] ?>" disabled/>
            </div>
            <div class="col">
                <label for="preco">Informe o preço do produto:</label>
                <input type="text" name="preco" class="form-control" value="<?= $resultado['preco'] ?>" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" name="btnExcluir" class="btn btn-primary" value="Inserir">Excluir</button>
            </div>
        </div>
    </form>

<?php require '../src/View/rodape.php'; ?>