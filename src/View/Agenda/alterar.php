<?php require '../src/View/cabecalho.php'; ?>

<h1>Alterar Agendamento</h1>

<form method="post" action="/agenda/editar/<?= $resultado['id'] ?>">

    <div class="row">
        <div class="col-3">
            <label for="dia">Insira a data</label>
            <input type="date" name="dia" class="form-control" value="<?= $resultado['dia'] ?>"/>
        </div>
        <div class="col-2">
            <label for="hora">Insira a hora</label>
            <input type="time" name="hora" class="form-control" value="<?= $resultado['hora'] ?>"/>
        </div>
    </div>

    <div class="row">
        <!-- Para selecionar o cliente -->
        <div class="col-3">
            <label for="cliente">Selecione o cliente:</label>
            <select name="cliente" id="cliente" class="form-control">
                <?php
                while($c = $cliente->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <option value="<?= $c['id'] ?>" <?php if ($c['id'] ==  $resultado['id_clientes']) echo "selected:"; ?> >
                        <?= $c['nome'] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>
        <!-- Para selecionar o serviço -->
        <div class="col-3">
            <label for="servico">Selecione o serviço:</label>
            <select name="servico" id="servico" class="form-control">
                <?php
                while($s = $servico->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <option value="<?= $s['id'] ?>" <?php if ($s['id'] ==  $resultado['id_servicos']) echo "selected"; ?> >
                    <?= $s['descricao'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" name="btnAlterar" class="btn btn-primary" value="Inserir">Alterar Agenda</button>
        </div>
    </div>
</form>

<?php require '../src/View/rodape.php'; ?>