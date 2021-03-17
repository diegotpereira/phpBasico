<?php
//Funções para construção de data e intervalo
function buildDateTime($hour, $minute, $second, $month, $day, $year){
    $timestamp = mktime($hour, $minute, $second, $month, $day, $year);
    $date = new DateTime("now", new DateTimeZone('America/Sao_Paulo'));
    $date->setTimestamp($timestamp);
    return $date;   
}

function buildDateInterval($hour, $minute, $second, $month, $day, $year){
    $interval = "P{$year}Y{$month}M{$day}D";
    $interval .= "T{$hour}H{$minute}M{$second}S";
    return new DateInterval($interval);
}
//Função para simplificar resgate de infromações do formulário
function getPostParam($name){
    return !isset($_POST[$name]) ? 0 : (int) $_POST[$name];
}
//Buscar valores
$hourOne = getPostParam('hourOne');
$minuteOne = getPostParam('minuteOne');
$secondOne = getPostParam('secondOne');
$monthOne = getPostParam('monthOne');
$dayOne = getPostParam('dayOne');
$yearOne = getPostParam('yearOne');

$operationType = $_POST['operationType'];

$hourTwo = getPostParam('hourTwo');
$minuteTwo = getPostParam('minuteTwo');
$secondTwo = getPostParam('secondTwo');
$monthTwo = getPostParam('monthTwo');
$dayTwo = getPostParam('dayTwo');
$yearTwo = getPostParam('yearTwo');
// Monta datas e intervalo
$dateOne = buildDateTime($hourOne, $minuteOne, $secondOne, $monthOne, $dayOne, $yearOne);

$intervalTwo = buildDateInterval($hourTwo, $minuteTwo, $secondTwo, $monthTwo, $dayTwo, $yearTwo);

$dateTwo = buildDateTime($hourTwo, $minuteTwo, $secondTwo, $monthTwo, $dayTwo, $yearTwo);

switch ($operationType) {
    case 'A':
        # code...
        $dateOne->add($intervalTwo);
        $resultado = "O resultado da adição é {$dateOne->format('d/m/y H:i:s')}.";
        break;
    case 'S':
        # code...
        $dateOne->sub($intervalTwo);
        $resultado = "O resultado da subtração é {$dateOne->format('d/m/y H:i:s')}";
        break;
    case 'D':
        # code...
        $diff = $dateOne->diff($dateTwo);
        $resultado = " A diferença entre as datas é de ";
        $resultado .= "{$diff->format('%d Dias')} ";
        $resultado .= "{$diff->format('%m Meses')} ";
        $resultado .= "{$diff->format('%y Anos')} ";
        $resultado .= "{$diff->format('%h Horas')} ";
        $resultado .= "{$diff->format('%i Minutos')} ";
        $resultado .= "{$diff->format('%s Segundos')}.";
        break;  
    case 'C':
        # code...
        if ($dateOne == $dateTwo) {
            # code...
            $resultado = "As datas informadas são iguais.";
        } else if ($dateOne > $dateTwo){
            # code...
            $resultado = "{$dateOne->format('d/m/Y H:i:s')}
                é maior que {$dateTwo->format('d/m/Y H:i:s')}.";
        }else {
            # code...
            $resultado = "{$dateTwo->format('d/m/y H:i:s')}";
        }
        break;
}
// Realizar cálculo de datas
require_once('result.phtml');
?>