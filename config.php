<?php

try {
    $PDO = [
        'host' => 'mysql:dbname=sistema_de_atendimento;host=127.0.0.1;charset=utf8',
        'user' => 'root',
        'pass' => '',
    ];
    $PDO = new PDO($PDO['host'], $PDO['user'], $PDO['pass']);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

require_once 'utils/presenter.php';
require_once 'utils/sanitizer.php';
require_once 'utils/validation.php';
require_once 'utils/crud.php';
