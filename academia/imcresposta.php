<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
    <link rel="stylesheet" href="./css/imc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Gugi&family=Quicksand:wght@300..700&family=Road+Rage&family=Sigmar&display=swap" rel="stylesheet">
</head>
<body>
<header>
        
        <div class="menu-content">
            <img class="logoimg" src="./img/image_1-removebg-preview.png" alt="">
            <nav class="headermenu">
                <ul class="list-itens">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#"></a>Planos</li>
                    <li><a href="imc.php"></a>Calcule seu IMC</li>
                    <li><a href="cadastro.php"></a>Cadastro</li>
                    <li><a href="#"></a><img class="socialmedia" src="./img/bluesky-brands-solid.svg" alt=""></li>
                    <li><a href="#"></a><img class="socialmedia"  src="./img/instagram-brands-solid.svg" alt=""></li>
                    <li><a href="#"></a>Sobre Nós</li>
                </ul>
                

            </nav>
        </div>       
</header>
    <main>

    
    <main>
        <div class="maincontent">
            <h1 class="primary-text">Malhar é questão de saúde física e mental</h1>
            <h2 class="second-text">
            SE INSCREVA AGORA E MUDE DE VIDA
            </h2> 
            <?php
        if ( $_SERVER['REQUEST_METHOD']=="POST" ){
            $peso=($_POST['peso']);
            $altura=($_POST['altura']);
            $imc=$peso/pow($altura,2);
            echo "<fieldset><legend><h1>Seu IMC</h1></legend>
            <p>Sua altura é de <strong>$altura</strong> e seu peso  é de <strong>$peso Kg</strong>
                Seu <strong>IMC</strong> é de <strong>$imc</strong>
            </p>
            
            </fieldset> ";       
        
        }
            if($imc<18.5){
                echo "<fieldset><p>Magreza</p></fieldset>";
            }elseif($imc>=18.5 and $imc<24.9){
                echo "<fieldset><p>Normal</p></fieldset>";
            }elseif($imc>=18.5 and $imc<24.9){
                echo "<fieldset><p>Sobrepeso</p></fieldset>";
            }elseif($imc>24.9){
                echo "<fieldset><p>Obesidade</p></fieldset>";  
            }else{
                header ("Location:index.hmtl");
                exit();
            }
        
        
        ?>               

        </div>
    
    </main>

    
</body>
</html>