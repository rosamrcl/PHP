<?php
if ($_SERVER["REQUEST_METHOD"]==='GET'){
    $numeros=$_GET['numero'];
    $positivo=0;
    $negativo=0;
    $par=0;
    $impar=0;
    

}
    foreach ($numeros as $numero){
        if($numero<0){
            $negativo++;
        }elseif($numero>0){
            $positivo++;
        }
        if($numero%2===0){
            $par++;
        }else{
            $impar++;
        }
    }
    echo "<p>Número pares: $par <br>
        Número impares: $impar <br>
        Número Negativo: $negativo <br>
        Número Positivo: $positivo <br>        
    
    </p>"


?>