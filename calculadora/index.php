<?php
$num1=0;
$num2=0;
$calculo="soma";
$resultado=0;
if(isset($_GET['num1'],$_GET['num2'],$_GET['calculo'])){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    $calculo=$_GET['calculo'];
}

switch ($calculo) {
    case 'soma':
        $resultado=$num1+$num2;
        break;
    case 'sub':
        $resultado=$num1-$num2;
        break;
    case 'mult':
        $resultado=$num1*$num2;
        break;
    case 'div':
        $resultado=$num1/$num2;
        break;
}



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Calculadora</h1>
    <form  method="get" >

        <input type="number" name="num1" id="num1" value="<?= $num1?>"><br>
        <select name="calculo" id="">
            <option value="soma" <?=($calculo=='soma')?'Selected':'';?>>+</option>
            <option value="sub" <?=($calculo=='sub')?'Selected':'';?>>-</option>
            <option value="mult" <?=($calculo=='mult')?'Selected':'';?>>x</option>
            <option value="div" <?=($calculo=='div')?'Selected':'';?>>/</option>
        </select><br>


        <input type="number" name="num2" id="num2" value="<?= $num2?>"><br>
        <input class="igual" type="submit" value="="><br>
        <input type="number" name="res" id="res" value="<?= $resultado?>">



    </form>
    <a href="https://github.com/RosaCL"><img src="costurezaa.png" alt=""></a>




</main>
</body>
</html>