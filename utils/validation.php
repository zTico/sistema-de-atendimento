<?php

function is_empty($value)
{
    return empty($value);
}

function is_filled($value)
{
    return !is_empty($value);
}

function is_cpf($cpf)
{
    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{
                $c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{
            $c} != $d) {
            return false;
        }
    }

    return true;
}

function is_email($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_date($date)
{
    $exploded = explode_date_ptbr($date);
    $date = ['year' => $exploded[2], 'month' => $exploded[1], 'day' => $exploded[0]];
    return checkdate($date['month'], $date['day'], $date['year']);
}
