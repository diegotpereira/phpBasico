<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Função Calcular média</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

  <?php
      $valor1 = $_GET['num1'];
      $valor2 = $_GET['num2'];
      $valor3 = $_GET['num3'];

      $media = ($valor1 + $valor2 + $valor3) / 3 ;

      $msg = "A média das notas $valor1, $valor2, $valor3 é $media.";
    ?> 
    <div class="alert alert-success" role="alert">
         <?=$msg?>
    </div>
</body>
</html>