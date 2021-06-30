<?php require '../src/View/cabecalho.php';

    if(isset($sucesso)){
        echo $sucesso;
    }elseif(isset($falha)){
        echo $falha;
    }

?>

<h1>Clientes</h1>


<a href="/clientes/criar" class="btn btn-success">Novo Cliente</a>
<table class="table table-responsive table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($c = $resultado->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['nome'] ?></td>
                <td><?= $c['telefone'] ?></td>
                <td>
                    <a href="/clientes/alterar/<?= $c['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="/clientes/excluir/<?= $c['id'] ?>" class="btn btn-danger">Excluir</a>
                    <a href="/clientes/visualizar/<?= $c['id'] ?>" class="btn btn-info">Visualizar</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php require '../src/View/rodape.php'; ?>
