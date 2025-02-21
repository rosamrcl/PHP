<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <main>
    <div class="box">
                                        
        <?php
        if ( $_SERVER['REQUEST_METHOD']=="POST" ){
            $peso=($_POST['peso']);
            $altura=($_POST['altura']);
            $imc=$peso/pow($altura,2);
            echo"<p>Sua altura é de $altura e peso KG $peso </p>";
            echo"<h3>Seu IMC é:</h3>$imc";       
       
        }if($imc<18.5){
            echo "<h2>Magreza</h2>"; 
        }elseif($imc>=18.5 and $imc<24.9){
            echo "<h2>Normal</h2>";
        }elseif($imc>= 24.9 and $imc< 30){
            echo "<h2>Sobrepeso</h2>";
        }else{
            echo "<h2>Obesidade</h2>";
        }
        
        
        
        
        
        else{
            header ("Location:index.hmtl");
                    exit();
        }
        
        
        ?>
                </div>
    </main>
    
</body>
</html>