<?php

function get_only_numbers($string)
{
    return preg_replace('/[^0-9]/is', '', $string);
}

function format_to_date_db($date_pt_br)
{
    $exploded = explode_date_ptbr($date_pt_br);
    return "{$exploded[2]}-{$exploded[1]}-{$exploded[0]}";
}
