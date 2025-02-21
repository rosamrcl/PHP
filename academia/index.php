<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulário</title>
    
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="box">
        <form action="resposta.php" method="post">
            <fieldset> <legend><b>Formulário</b></legend><br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="firstname"class="labelinput">Nome</label>                    
                </div><br>
                <div class="inputbox" >
                    <input type="text" name="lastaname" id="lastname" class="inputUser" required>
                    <label for="lastname"class="labelinput">Sobrenome</label>
                </div><br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email"class="labelinput">E-mail</label>
                </div><br>
                <div class="inputbox">
                    <input type="tel" name="tel" id="tel" class="inputUser">
                    <label for="tel"class="labelinput">Telefone</label>
                </div><br>
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label><br>

                <div class="inputbox">
                    <label for="data_nascimento">Data de nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required><br>
                    <input type="number" name="peso" id="peso" class="inputUser" required>
                    <label for="peso"class="labelinput">Peso</label><br>
                    <input type="number" name="altura" id="altura" class="inputUser" required><br>
                    <label for="altura" class="labelinput">Altura</label>                   
                    

                </div><br>
                
    
                <div class="inputbox">
                    <input type="text" name="adress" id="adress" class="inputUser">
                    <label for="adress" class="labelinput">Endereço</label>
                </div><br>
                <div class="inputbox">
                    <input type="number" name="number" id="number" class="inputUser">
                    <label for="number"class="labelinput">N°</label>
                </div><br>
                <div class="inputbox">
                    <input type="text" id="complemento" name="complemento" class="inputUser">
                    <label for="complemento" class="labelinput">Complemento</label>
                </div><br>
                <div class="inputbox">
                    <input type="text" id="cidade" name="cidade" class="inputUser">
                    <label for="cidade" class="labelinput">Cidade</label>
                </div><br>
                <div class="inputbox">
                    <input type="text" id="estado" name="estado" class="inputUser">
                    <label for="estado" class="labelinput">Estado</label>
                </div><br>
                <div class="inputbox">
                    <input type="number" name="cep" id="cep" class="inputUser">
                    <label for="cep" class="labelinput">CEP</label>
                </div><br>
                <div class="inputbox">
                    <form action="./post=true" method="post" name="post" enctype="multipart/form-data">
                        <input type="file" name="file" id="file" class="inputUser">
                    
                    </form>
                </div><br>
                <div class="inputbox">
                    <input type="datetime-local" name="datalocal" id="datalocal" class="inputUser">
                    <label for="datalocal" class="labelinput">Data e local</label>

                </div><br>
                <input type="submit" value="Enviar" id="enviar">
                
                

            </fieldset>


        </form>

    </div>
    
</body>
</html>