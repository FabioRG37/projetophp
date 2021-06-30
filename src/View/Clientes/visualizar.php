<?php require '../src/View/cabecalho.php'; ?>

<h1>Dados do Cliente</h1>

<form>
    <div class="row">
        <div class="col-2">
            <h5>Id: <?= $resultado['id'] ?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" value="<?= $resultado['nome'] ?>"/>
        </div>
        <div class="col-3">
            <label for="cpf">CPF:</label>
            <input type="number" name="cpf" class="form-control" value="<?= $resultado['cpf'] ?>"/>
        </div>
        <div class="col-3">
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" class="form-control" value="<?= $resultado['telefone'] ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="email">E-Mail:</label>
            <input type="text" name="email" class="form-control" value="<?= $resultado['email'] ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" class="form-control" value="<?= $resultado['endereco'] ?>"/>
        </div>
        <div class="col-4">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" class="form-control" value="<?= $resultado['cidade'] ?>"/>
        </div>
        <div class="col-2">
            <label for="estado">UF:</label>
            <input type="text" name="estado" class="form-control" value="<?= $resultado['estado'] ?>"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <input type="submit" name="btnInserir" class="btn btn-primary" value="Incluir"/>
        </div>
    </div>
</form>

<?php require '../src/View/rodape.php'; ?>
