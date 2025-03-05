<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

<main>
<div class="content-form">
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome=htmlspecialchars($_POST["nome"]);
        $email=htmlspecialchars($_POST["email"]);
        $tel=htmlspecialchars($_POST["tel"]);
        $endereco=htmlspecialchars($_POST["endereco"]);
        $complemento=htmlspecialchars($_POST["complemento"]);
        $cidade=htmlspecialchars($_POST["cidade"]);
        $estado=htmlspecialchars($_POST["estado"]);
        $cep=htmlspecialchars($_POST["cep"]);

        echo "<p><strong>Nome:</strong> $nome<br>
        <strong>E-mail:</strong> $email <br>
        <strong>Telefone:</strong> $tel <br>
        <strong>Rua:</strong> $endereco <br>
        <strong>Complemento:</strong> $complemento <br>
        <strong>Cidade:</strong> $cidade <br>
        <strong>Estado:</strong> $estado <br>
        <strong>Cep:</strong> $cep <br>
        </p><br>";     


    }else{
        header("location:requisicao.php");
        exit();
        }
    ?>
</div>
</main>
</body>
</html>