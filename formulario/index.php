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
    
    <form class="formulario" action="requisicao.php" method="post">
        <h1 class="forme">Formulário</h1> 
        <label for="nome">Nome Completo:</label>
        <input type="text" name="nome" id="nome"><br> 


        <label for="email">E-mail:</label>
        <input type="email" name="email"  id="email" required><br>
        <label for="tel">Telefone:</label>
        <input type="tel" name="tel"   id="tel" required><br>


        <label for="endereco">Rua:</label>
        <input type="text" name="endereco" id="endereco" required><br>
        <label for="complemento">Complemento:</label>    
        <input type="text" name="complemento" id="complemento" required > <br>
        <label for="cidade">Cidade:</label> <input type="text" name="cidade"  id="cidade" required><br>
        <label for="estado">Estado:</label> <input type="text" name="estado"  id="estado" required><br>
        <label for="cep">CEP: </label><input type="number" name="cep"  id="cep" required><br>
        <input class="enviar" type="submit" value="Enviar" id="enviar"><br>
        <a href="https://github.com/RosaCL"><img src="costurezaa.png" alt=""></a>
</form>
</div>

</main>

</body>

</html>