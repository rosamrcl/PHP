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
<div class="container">
    <h1 class="forme">Formulário</h1>
    <img src="costi.svg" class="consti" alt="">
    <form action="requisicao.php" method="post">
    <label for="nome">Nome Completo:</label> 
    <input type="text" name="nome" id="nome" required><br>


    <label for="email">E-mail:</label>
    <input type="email" name="email"  id="email" required>
    <label for="tel">Telefone:</label>
    <input type="tel" name="tel"   id="tel" required><br>


    <label for="endereco">Rua:</label>
    <input type="text" name="endereco" id="endereco" required>
    <label for="complemento">Complemento:</label>    
    <input type="text" name="complemento" id="complemento" required > <br>
    <label for="cidade">Cidade:</label> <input type="text" name="cidade"  id="cidade" required>
    <label for="estado">Estado:</label> <input type="text" name="estado"  id="estado" required>
    <label for="cep">CEP: </label><input type="number" name="cep"  id="cep" required><br>
    <input class="enviar" type="submit" value="Enviar" id="enviar"><br>
</form>
</div>




</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>