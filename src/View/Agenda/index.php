<?php require '../src/View/cabecalho.php';

if(isset($sucesso)){
    echo $sucesso;
}elseif(isset($falha)){
    echo $falha;
}

?>

<h1>Agenda</h1>

<a href="/agenda/criar" class="btn btn-success">Agendar</a>
<table class="table table-responsive table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome do Cliente</th>
        <th scope="col">Data/Hora</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($a = $resultado->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?= $a['id'] ?></td>

            <td> - </td>

            <td><?= $a['dia'] ?> - <?= $a['hora'] ?></td>
            <td>
                <a href="/agenda/alterar/<?= $a['id'] ?>" class="btn btn-warning">Editar</a>
                <a href="/agenda/excluir/<?= $a['id'] ?>" class="btn btn-danger">Excluir</a>
                <a href="/agenda/visualizar/<?= $a['id'] ?>" class="btn btn-info">Visualizar</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<?php require '../src/View/rodape.php'; ?>
