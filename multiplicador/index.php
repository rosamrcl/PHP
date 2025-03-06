<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pt-br</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="form-content">
            <form action="resposta.php" method="post">
                <?php for ($i=0; $i<10; $i++):?>
                <label class="numero-label" for="numero <?php echo $i;?>">Número <?php echo $i +1;?></label><br>
                <input class="numero" type="number" name="numero$i" id="numero <?php echo $i;?>" step="0.01"> <br>
                <?php endfor;?>
                <label class="numero-label" for="multiplicador">Multiplicador</label><br>
                <input class="mult" type="number" name="multiplicador" id="multiplicador" > <br>
                <input class="enviar" type="submit" value="Enviar">            
                
            </form>
        </div>
    </main>
    <footer>
        <a href="https://github.com/rosacl"><img src="./costurezaa.png" alt=""></a>
    </footer>
    
    
</body>
</html>