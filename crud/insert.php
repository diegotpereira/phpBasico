<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'root';
    $dbname = 'phpBasico';

    $connection = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if (mysqli_connect_errno()) {
        # code...
        echo "Falha ao conectar ao banco de dados: " . mysqli_connect_error();
    }

    $sql="INSERT INTO Usuarios (Nome, Sobrenome, Idade) VALUES ('$_POST[nome]','$_POST[sobrenome]','$_POST[idade]')";
    //A instrução POST recupera os dados do formulário.
    if (!mysqli_query($connection,$sql))
    {
    die('Erro: ' . mysqli_error($connection));
    }
    echo "1 registro adicionado";
    
    mysqli_close($connection);
    //Este comando fecha a conexão ao banco de dados ao final.
?>