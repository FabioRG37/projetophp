<?php require '../src/View/cabecalho.php';

    if (isset($sucesso)){
        echo "<p>",$sucesso,"</p>";
    } elseif (isset($erro)){
        echo "<p>",$erro,"</p>";
    }

?>

<h1>Excluir Cliente</h1>
<form method="POST" action="/clientes/remover/<?= $resultado['id'] ?>">
    <div class="row">
        <div class="col">
            <label for="nome"> Nome do cliente: </label>
            <input type="text" name="nome" class="form-control" value="<?= $resultado['nome'] ?>" disabled/>
        </div>
        <div class="col-3">
            <label for="cpf">CPF:</label>
            <input type="number" name="cpf" class="form-control" value="<?= $resultado['cpf'] ?>" disabled/>
        </div>
        <div class="col-3">
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" class="form-control" value="<?= $resultado['telefone'] ?>" disabled/>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="email">E-Mail:</label>
            <input type="text" name="email" class="form-control" value="<?= $resultado['email'] ?>" disabled/>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" class="form-control" value="<?= $resultado['endereco'] ?>" disabled/>
        </div>
        <div class="col-4">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" class="form-control" value="<?= $resultado['cidade'] ?>" disabled/>
        </div>
        <div class="col-2">
            <label for="estado">UF:</label>
            <input type="text" name="estado" class="form-control" value="<?= $resultado['estado'] ?>" disabled/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <input type="submit" name="btnExcluir" class="btn btn-primary" value="Excluir"/>
        </div>
    </div>
</form>

<?php require '../src/View/rodape.php'; ?>
