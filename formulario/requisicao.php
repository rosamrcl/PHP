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

        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Telefone:</strong> $tel</p>";
        echo "<p><strong>Rua:</strong> $endereco</p>";
        echo "<p><strong>Complemento:</strong> $complemento/p>";
        echo "<p><strong>Cidade:</strong> $cidade</p>";
        echo "<p><strong>Estado:</strong> $estado</p>";
        echo "<p><strong>Cep:</strong> $cep</p>";

    }else{
        header("location:requisicao.php");
        exit();
        }
    ?>
    <a href="https://github.com/RosaCL"><img class="consti" src="costureza.png" alt=""></a>

</div>



</main>
</body>

</html>