<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<main>
<div class="container" id="divis">
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome=htmlspecialchars($_POST["nome"]);
        $email=htmlspecialchars($_POST["email"]);
        $tel=htmlspecialchars($_POST["tel"]);
        $endereco=htmlspecialchars($_POST["endereco"]);
        $cidade=htmlspecialchars($_POST["cidade"]);
        $estado=htmlspecialchars($_POST["estado"]);
        $cep=htmlspecialchars($_POST["cep"]);

        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Telefone:</strong> $tel</p>";
        echo "<p><strong>Rua:</strong> $endereco</p>";
        echo "<p><strong>Cidade:</strong> $cidade</p>";
        echo "<p><strong>Estado:</strong> $estado</p>";
        echo "<p><strong>Cep:</strong> $cep</p>";

    }else{
        header("location:requisicao.php");
        exit();
        }
    ?>

</div>



</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome=htmlspecialchars($_POST["nome"]);
        $email=htmlspecialchars($_POST["email"]);
        $tel=htmlspecialchars($_POST["tel"]);
        $endereco=htmlspecialchars($_POST["endereco"]);
        $cidade=htmlspecialchars($_POST["cidade"]);
        $estado=htmlspecialchars($_POST["estado"]);
        $cep=htmlspecialchars($_POST["cep"]);

        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Telefone:</strong> $tel</p>";
        echo "<p><strong>Rua:</strong> $endereco</p>";
        echo "<p><strong>Cidade:</strong> $cidade</p>";
        echo "<p><strong>Estado:</strong> $estado</p>";
        echo "<p><strong>Cep:</strong> $cep</p>";

    }else{
        header("location:requisicao.php");
        exit();
    }

    ?>