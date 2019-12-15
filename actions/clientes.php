<?php

require_once '../config.php';

if (!empty($_POST['action'])) {
    if ($_POST['action'] == 'cadastrar' || $_POST['action'] == 'editar') {

        $fields = [
            'nome' => [
                'validations' => ['is_filled'],
            ],
            'cpf' => [
                'validations' => ['is_cpf'],
                'sanitizers' => ['get_only_numbers'],
            ],
            'telefone' => [
                'validations' => ['is_filled'],
            ],
            'nascimento' => [
                'validations' => ['is_date'],
                'sanitizers' => ['format_to_date_db'],
            ],
            'email' => [
                'validations' => ['is_email'],
            ],
        ];

        $is_valid = is_valid_form($fields);

        if ($is_valid === true) {
            $sanitezed = array_values(sanitize_form($fields));

            if ($_POST['action'] == 'cadastrar') {
                $sql = "INSERT INTO clientes VALUES (NULL,?,?,?,?,?)";
                $stmt = $PDO->prepare($sql);
                $result = $stmt->execute($sanitezed);
                if (!$result) {
                    var_dump($stmt->errorInfo());
                    exit;
                }
                return header('Location: ../pages/clientes/index.php');
            }

            if ($_POST['action'] == 'editar') { }
        }


        var_dump($is_valid);
        exit;
    }
}
