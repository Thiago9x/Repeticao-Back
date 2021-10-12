<?php
    $valor = (int) 0;
    $cont = (int) 0;//equivalente ao i
    if(isset($_POST['btnCalcular']))
    {
    $valor1 = $_POST['txtN'];
//exemplo de utilizar while
    // while($cont <= $valor1){
    //     echo($cont . "<br>");
    //     //$cont = $cont + 1; ou $cont +=1
    //     $cont +=1
    // }

    //exemplo de utilização do for
    for($cont = 0; $cont <= $valor1; $cont ++){
        echo($cont . "<br>");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frmRepeticao" method="post" action="">
    <label>Escolha um número </label>
    <input type="text" name="txtN" value="" maxlength="10" placeholder="Digite um número">
    <input type="submit" name="btnCalcular"value="Calcular">
    </form>
</body>
</html>