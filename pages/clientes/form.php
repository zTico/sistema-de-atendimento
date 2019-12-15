<?php require_once '../layout-header.php'; ?>

<form method="POST" action="../../actions/clientes.php" autocomplete="off">
    <input type="hidden" name="action" value="cadastrar">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" autocomplete="off">
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control mask-cpf">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="nascimento">Nascimento</label>
                <input type="text" name="nascimento" id="nascimento" class="form-control datepicker">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control mask-phone">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
    <a class="btn btn-sm btn-secondary" href="index.php">Cancelar</a>
</form>

<?php require_once '../layout-footer.php'; ?>