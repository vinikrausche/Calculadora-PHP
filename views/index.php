<?php 
 $res = 0;

//verificação se o botão enviar funciona
if(isset($_POST['calcular'])){
    //tratamento dos dados
    $num1 = filter_input(INPUT_POST,'num1',FILTER_VALIDATE_INT);
    $num2 = filter_input(INPUT_POST,'num2',FILTER_VALIDATE_INT);
    $op = $_POST['operacao'];
   
    //verificação do preenchimento dos dados
    if(!empty($num1) && !empty($num2) && !empty($op)){
      switch($op){
          case 'soma': 
            $res = $res + ($num1+$num2);
            break;
            case 'mult':
                $res = $num2*$num1;
            break;
            case 'div': 
                $res = $num1/$num2;
            break;
            case 'sub': 
                $res = $num1 - $num2;
            break;
      }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/estilo.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="calculadora">
        <div class="div-titulo">
            <h2>Calculadora em PHP</h2>
        </div>

        <div class="div-form">
            <form method="POST">
                <label for="num1">Primeiro Número</label>
                <input type="text" name="num1"></br><br>
                <label for="num2">Segundo Número</label>
                <input type="text" name="num2"></br>

                <fieldset id="field-form">
                    <legend>Operações</legend>
                    <label for="soma">Soma</label>
                    <input type="radio" name="operacao" value="soma"><br>
                    <label for="sub">Subtração</label>
                    <input type="radio" name="operacao" value="sub"><br>
                    <label for="mult">Multiplicação</label>
                    <input type="radio" name="operacao" value="mult"><br>
                    <label for="div">Divisão</label>
                    <input type="radio" name="operacao" value="div"><br>
                </fieldset>
                <input class="button" type="submit" name="calcular" value="calcular">
            </form>
        </div>
    </div>

    <div>
        <h4>Resultado</h4>
        <p><?= ($res) ? $res:'sem dados';?></p>
    </div>
    </section>
  
</body>
</html>

