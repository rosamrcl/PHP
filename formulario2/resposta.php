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
            <fieldset>
                <legend>Dados Recebidos</legend>
                <?php 
                    if($_SERVER['REQUEST_METHOD']=="POST"){

                        $nome=$_POST["nome"];
                        $lastaname=$_POST["lastaname"];
                        $email=$_POST["email"];
                        $tel=$_POST["tel"];
                        $adress=$_POST["adress"];
                        $number=$_POST["number"];
                        $complemento=$_POST["complemento"];
                        $cidade=$_POST["cidade"];
                        $estado=$_POST["estado"];
                        $cep=$_POST["cep"];
                        
                        echo "<p><strong>Nome:</strong>$nome</p>";
                        echo "<p><strong>Sobrenome:</strong>$lastaname</p>";                
                        echo "<p><strong>E-mail:</strong>$email</p>";
                        echo "<p><strong>Telefone:</strong>$tel</p>";
                        echo "<p><strong>Endereço:</strong>$adress</p>";
                        echo "<p><strong>Nº:</strong>$number</p>";
                        echo "<p><strong>Complemento:</strong>$complemento</p>";
                        echo "<p><strong>Cidade:</strong>$cidade</p>";
                        echo "<p><strong>Estado:</strong>$estado</p>";
                        echo "<p><strong>CEP:</strong>$cep</p>";
                    }else{
                    header("Location:index.php");
                    exit();
                    }

                ?>
            </fieldset>
            <a href="https://github.com/RosaCL"><img src="costureza.png" alt=""></a>
        </div>

    </main>


</body>

</html>