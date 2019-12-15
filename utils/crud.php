<?php

function explode_date_ptbr($date)
{
    $exploded = explode('/', $date);
    if (count($exploded) != 3) {
        throw new \Exception('Data "' . $date . '" formato inválido.');
    }
    return $exploded;
}

function is_valid_form($fields)
{
    $erros = [];

    foreach ($fields as $field => $configs) {
        if (!empty($configs['validations'])) {
            foreach ($configs['validations'] as $validation) {
                try {
                    if (!$validation($_POST[$field])) {
                        if (empty($erros[$field]))
                            $erros[$field] = [];
                        $erros[$field] = $validation;
                    }
                } catch (\Exception $e) {

                    var_dump($validation);
                    exit;

                    $erros[$field] = $validation;
                }
            }
        }
    }

    return empty($erros) ? true : $erros;
}

function sanitize_form($fields)
{
    $values = [];
    foreach ($fields as $field => $configs) {
        $values[$field] = $_POST[$field];
        if (!empty($configs['sanitizers'])) {
            foreach ($configs['sanitizers'] as $sanitizer) {
                $_POST[$field] = $values[$field] = $sanitizer($_POST[$field]);
            }
        }
    }
    return $values;
}
