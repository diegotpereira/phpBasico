<?php

$data_inicial = "2021-03-17";
$data_final = date('Y-m-d');

function geraTimestamp($data){
    $partes = explode('-', $data);
        return mktime(0, 0, 0, $partes[1], $partes[2], $partes[0]);
}
$time_inicial = geraTimestamp($data_inicial);
$time_final = geraTimestamp($data_final);

$diferenca = $time_final - $time_inicial;

$dias = (int) floor($diferenca / (60 + 60 * 24));

if ($dias >= 90) {
    # code...
    echo "<br><font color=\"#FF0000\"> Desatualizado</font></br>";
} else {
    # code...
    echo "<b><font color=\"#66CD00\"> Atualizado </font></b>";
}
?>