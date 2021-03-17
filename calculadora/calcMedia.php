<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Calculadora de Média Aritmética</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <h3 align="center">Calculo da Média Aritmética</h3>

    <div class="formulario" align="center">
       <form action="respostamedia.php" method="get">
           <label name="num1">Nota 1</label>
           <input type="text" name="num1" placeholder="Digite a primeira nota.">
           <br>
           <label name="num2">Nota 2</label>
           <input type="text" name="num2" placeholder="Digite a segunda nota.">
           <br>
           <label name="num3">Nota 3</label>
           <input type="text" name="num3" placeholder="Digite a terceira nota.">

           <p> 
              <input type="submit" value="Calcular" class="btn btn-success"> 
              <input type="reset" value="Limpar" class="btn btn-danger">
       </form>
    </div>
</body>
</html>