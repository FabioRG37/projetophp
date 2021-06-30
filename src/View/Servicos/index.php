<?php require '../src/View/cabecalho.php';

    if(isset($sucesso)){
        echo "<p>$sucesso</p>";
    }elseif (isset($falha)){
        echo "<p>$falha</p>";
    }

?>

<h1>Serviços</h1>

<a href="/servicos/criar" class="btn btn-success">Novo Serviço</a>
<table class="table table-responsive table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($s = $resultado->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $s['id'] ?></td>
                <td><?= $s['descricao'] ?></td>
                <td><?= $s['preco'] ?></td>
                <td>
                    <a href="/servicos/alterar/<?= $s['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="/servicos/excluir/<?= $s['id'] ?>" class="btn btn-danger">Excluir</a>
                    <a href="/servicos/visualizar/<?= $s['id'] ?>" class="btn btn-info">Visualizar</a>
                </td>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>

<?php require '../src/View/rodape.php'; ?>
