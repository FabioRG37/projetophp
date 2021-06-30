<?php require '../src/View/cabecalho.php'; ?>

<h1>Excluir Agendamento</h1>

<form method="post" action="/agenda/remover/<?= $resultado['id'] ?>">

    <div class="row">
        <div class="col-3">
            <label for="dia">Data</label>
            <input type="date" name="dia" class="form-control" value="<?= $resultado['dia'] ?>" disabled/>
        </div>
        <div class="col-2">
            <label for="hora">Hora</label>
            <input type="time" name="hora" class="form-control" value="<?= $resultado['hora'] ?>" disabled/>
        </div>
    </div>

    <div class="row">
        <!-- Para vizualizar o cliente -->
        <div class="col-3">
            <label for="cliente">Cliente:</label>
            <select name="cliente" id="cliente" class="form-control" disabled>
                <?php
                while($c = $cliente->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <option value="<?= $c['id'] ?>"
                    <?php if ($c['id'] ==  $resultado['id_clientes']) echo "selected";
                        ?><?= $c['nome'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <!-- Para visualizar o serviço -->
        <div class="col-3">
            <label for="servico">Serviço:</label>
            <select name="servico" id="servico" class="form-control" disabled>
                <?php
                while($s = $servico->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <option value="<?= $s['id'] ?>"
                    <?php if ($s['id'] ==  $resultado['id_servicos']) echo "selected";
                       ?><?= $s['descricao'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" name="btnExcluir" class="btn btn-danger" value="Inserir">Excluir</button>
        </div>
    </div>
</form>

<?php require '../src/View/rodape.php'; ?>