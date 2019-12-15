<?php require_once '../layout-header.php'; ?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th class="text-center">
                <a class="btn btn-sm btn-success" href="form.php"><i class="fas fa-plus"></i> Cadatrar</a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $rows = $PDO->query("SELECT * FROM clientes ORDER BY id DESC"); ?>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['nascimento']; ?></td>
                <td><?php echo $row['cpf']; ?></td>
                <td><?php echo $row['telefone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td class="text-center">
                    <button class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i> Editar</button>
                    <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Deletar</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../layout-footer.php'; ?>