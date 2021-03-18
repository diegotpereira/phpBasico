 <?php
    // Exemplo do uso Isset que verifica a existencia da variavel $_POST['enviar]
    if(isset($_POST['enviar'])){
        echo "O formulário foi enviado!.<br/>";
        echo "Seu nome é ".$_POST['nome']."<br>";
        echo "Seu telefone é ".$_POST['telefone']."<br>";
    }
    ?>