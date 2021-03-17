<?php
    $arquivo  = "lista_de_nomes.txt";

    $handle = fopen($arquivo, "r");

    while (!feof($handle)) {
        # code...
        $nome = fgets($handle, 4096);

        echo $nome."<br>";
    }
    fclose($handle)
?>