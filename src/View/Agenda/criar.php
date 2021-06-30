<?php require '../src/View/cabecalho.php'; ?>

<h1>Novo Agendamento</h1>

<form method="post" action="/agenda/salvar">

    <div class="row">
        <div class="col-3">
            <label for="dia">Insira a data</label>
            <input type="date" name="dia" class="form-control" />
        </div>
        <div class="col-2">
            <label for="hora">Insira a hora</label>
            <input type="time" name="hora" class="form-control"/>
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
                    <option value="<?= $c['id'] ?>">
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
                    <option value="<?= $s['id'] ?>" > <?= $s['descricao'] ?> </option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" name="btnInserir" class="btn btn-primary" value="Inserir">Agendar</button>
        </div>
    </div>
</form>

<?php require '../src/View/rodape.php'; ?>
