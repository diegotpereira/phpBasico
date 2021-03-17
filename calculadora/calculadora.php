<!DOCTYPE html>
<html>
<head>
     <title>Calculadora</title>
     <style type="text/css">
     td{
         color: #FFFF00;
         font-weight: bold;
         text-align: center;
         border: 1px solid #000099;
     }
     input#calc{
         background-color: #759475;
         text-align: right;
         color: #222722;
         border-color: #000099;
     }
     table#calculadora{
         border: 1px solid #000099;
         background-color: #3300cc;
     }
     #titulo{
         font-family: arial, verdana, sans serif;
         font-size: 1em;
         font-weight: bold;
         text-align: center;
     }
    </style> 
</head>
<body>

<?php 
class calculadora{
    var $nums = '';
    var $calc ='';
    var $op = '';

    function mostrar(){
        $num = @$_GET['num'][0];
        $calc = @$_GET['calc'];

        if (empty($num) AND empty($calc)) {
            # code...
            return false;
        }
        if (!isset($display)) {
            # code...
            $display = $calc;
        }
        $this->nums .= empty($num ) ? $display : $display.$num;

        $this->setOperacao();

        if (!empty($this->op)) {
            # code...
            $this->calc = $this->nums.rawurldecode($this->op).$num;
        }
        return $this->calcular();
    }
    function setOperacao(){
        if (!empty($_GET['op'])) {
            # code...
            $this->op = $_GET['op'];
        } 
    }
    function calcular(){
        $calc = empty($this->calc) ? $this->nums : $this->calc;

        if (isset($_GET['resultado'])) {
            # code...
            if (preg_match( '/^([0-9]+)(\/|\*|\+|\-)([0-9]+)+$/', $calc, $match )) {
                # code...
                switch ($match[2]) {
                    case "+":
                        # code...
                        return $match[1]+$match[3];
                        break;
                    case "-":
                        # code...
                        return $match[1]-$match[3];
                        break;
                    case "/":
                        # code...
                        return $match[1]/$match[3];
                        break;
                    case "*":
                        # code...
                        return $match[1]*$match[3];
                        break;    
                }
            }else {
                # code...
                return "Ocorreu um erro";
            }
        }
        return $calc;
    }
}
$calc = new calculadora();
?>
<form action="" method="get">
   <table id="calculadora" cellpadding="10" cellspacing="0" align="center">
      <tr>
          <td align="center" colspan="4">
              <span id="titulo">Calculadora</span><br/>
              <input id="calc" type="text" name="calc" value="<?=$calc->mostrar();?>"/>
          </td>
      </tr>
      <tr>
         <td>
             <input type="submit" name="num[]" value="7"/>
         </td>
         <td>
             <input type="submit" name="num[]" value="8"/>
         </td>
         <td>
             <input type="submit" name="num[]" value="9"/>
         </td>
         <td>
             <input type="submit" name="op" value="/"/>
         </td>
       </tr>
       <tr>
           <td>
              <input type="submit" name="num[]" value="4"/>
           </td>
           <td>
              <input type="submit" name="num[]" value="5"/>
           </td>
           <td>
               <input type="submit" name="num[]" value="6"/>
           </td>
           <td>
              <input type="submit" name="op" value="*"/>
           </td>
       </tr>
       <tr>
         <td>
           <input type="submit" name="num[]" value="1"/>
         </td>
         <td>
            <input type="submit" name="num[]" value="2"/>
         </td>
         <td>
             <input type="submit" name="num[]" value="3"/>
         </td>
         <td>
             <input type="submit" name="op" value="-"/>
         </td>
       </tr> 
       <tr> 
         <td> 
             <input type="submit" name="num[]" value="0"/>
         </td>
         <td>
            <input type="submit" name="num[]" value="."/>
         </td>
         <td>
             <input type="submit" name="resultado" value="="/>
         </td>
         <td> 
             <input type="submit" name="op" value="+"/>
         </td>
       </tr>
   </table>
</form>
</body>
</html>