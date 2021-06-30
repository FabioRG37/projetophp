<?php require '../src/View/cabecalho.php'; ?>

    <h1>Novo Serviço</h1>

    <form method="post" action="/servicos/salvar">

        <div class="row">
            <div class="col-6">
                <label for="nome">Informe a descrição:</label>
                <input type="text" name="nome" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <label for="preco">Informe o preço:</label>
            <input type="number" name="preco" step="0.010" class="form-control"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" name="btnInserir" class="btn btn-primary" value="Inserir">Incluir</button>
            </div>
        </div>
    </form>

<?php require '../src/View/rodape.php'; ?>