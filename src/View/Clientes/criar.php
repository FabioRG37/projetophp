<?php require '../src/View/cabecalho.php'; ?>

<h1>Cadastrar Novo Cliente</h1>
<form method="POST" action="/clientes/salvar">
    <div class="row">
        <div class="col-6">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Digite o nome"/>
        </div>
        <div class="col-3">
            <label for="cpf">CPF:</label>
            <input type="number" name="cpf" class="form-control" placeholder="Somente números"/>
        </div>
        <div class="col-3">
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" class="form-control" placeholder="Somente números"/>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="email">E-Mail:</label>
            <input type="text" name="email" class="form-control" placeholder="Digite o e-mail"/>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" class="form-control" placeholder="Digite o endereço"/>
        </div>
        <div class="col-4">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" class="form-control" placeholder="Digite a cidade"/>
        </div>
        <div class="col-2">
            <!-- <label for="estado">UF:</label>
            <input type="text" name="estado" class="form-control" placeholder="Estado"/> -->
            <select name="estado" id="estado" class="form-control">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP" selected>São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <input type="submit" name="btnInserir" class="btn btn-primary" value="Incluir"/>
        </div>
    </div>
</form>

<?php require '../src/View/rodape.php'; ?>
