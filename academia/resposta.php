<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do aluno</title>
    <link rel="stylesheet" href="./css/cadastroresposta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Days+One&family=Gugi&family=Quicksand:wght@300..700&family=Road+Rage&family=Sigmar&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <header>
        
        <div class="menu-content">
            <img class="logoimg" src="./img/image_1-removebg-preview.png" alt="">
            <nav class="headermenu">
                <ul class="list-itens">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="plano.html">Planos</a></li>
                    <li><a href="imc.php">Calcule seu IMC</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="contato.html"><img class="socialmedia" src="./img/redes-sociais.png" alt=""></a>
                </li>
                <li><a href="sobrenos.html">Sobre Nós</a></li>
            </ul>
            
            
        </nav>
    </div>
    
    
    
</header>

<main>
<div class="maincontent">
            <fieldset>
                <legend>
                    <h1 primary-texto>Cadastro do aluno</h1>
                </legend>
                <?php 
                if ($_SERVER['REQUEST_METHOD']=="POST"){

                    $nome = ($_POST['nome']);
                    $lastaname=($_POST['lastaname']);
                    $email=($_POST["email"]);
                    $tel=($_POST["tel"]);
                    $genero=($_POST["genero"]);
                    $data_nascimento=($_POST["data_nascimento"]);
                    $peso=($_POST["peso"]);
                    $altura=($_POST["altura"]);
                    $imc=$peso/($altura*$altura);
                    $adress=($_POST["adress"]);
                    $number=($_POST["number"]);
                    $complemento=($_POST["complemento"]);
                    $cidade=($_POST["cidade"]);
                    $estado=($_POST["estado"]);
                    $cep=($_POST["cep"]);
                    $datalocal=($_POST["datalocal"]);
                    
                    echo"<p><strong>Nome:</strong> $nome . $lastaname <br></p>" ;                    
                    echo "<p><strong>E-mail:</strong>$email <br></p>";
                    echo "<p><strong>Telefone:</strong> $tel <br></p>";
                    echo "<p><strong>Sexo:</strong>$genero <br></p>";
                    echo "<p><strong>Data de Nascimento:</strong>$data_nascimento<br></p>";
                    echo "<p><strong>Peso:</strong>$peso<br></p>";
                    echo "<p><strong>Altura:</strong>$altura<br></p>";
                    echo "<p><strong>IMC:</strong>$imc<br></p>";
                    echo "<p> <strong>Endereço:</strong>$adress<br></p>";
                    echo "<p><strong>Nº:</strong>$number<br></p>";
                    echo "<p><strong>Complemento:</strong>$complemento<br></p>";
                    echo "<p><strong>Cidade:</strong>$cidade<br></p>";
                    echo "<p><strong>Estado:</strong>$estado<br></p>";
                    echo "<p><strong>CEP:</strong>$cep<br></p>";
                    echo "<p><strong>Data e local:</strong>$datalocal<br></p>";       
                }else{
                    header ("Location:cadastro.php");
                    exit();
                }
                
                ?>

                <?php
                $folder=__DIR__ ."/uploads/";
                if(!file_exists($folder)||!is_dir($folder)){
                    mkdir($folder,0755);                    
                }
                var_dump([
                    "filesize"=>ini_get("upload_max_filesize"),
                    "postsize"=>ini_get("post_max_size"),
                ]);
                $getPost=filter_input(INPUT_GET,"POST",FILTER_VALIDATE_BOOLEAN);
                var_dump($_FILES);

                if($_FILES&& !empty($_FILES["file"]["name"])){
                    $file = $_FILES["file"];
                    var_dump($_FILES);

                    $allowebTypes=[
                        "image/jpeg",
                        "image/png",
                        "application/pdf"
                    ];
                }elseif($getPost){
                        echo "<p class='trigger warning'>Whoops parece que o arquivo que você selecionou é grande demais!</p>";
                        }else{
                            if($_FILES){
                                echo "<p class='trigger warning'>Selecione um arquivo antes de Enviar!</p>";

                            }
                        }
                        var_dump(scandir(__DIR__ ."/uploads"));
                    ?>

            </fieldset>
        </div>

</main>
<footer>
        <a href="https://github.com/RosaCL"><img class="consti" src="./img/costi.svg" alt=""></a>
    </footer>

</body>

</html>




  