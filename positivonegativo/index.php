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
            <form action="resposta.php" method="get">
                <?php for ($i=0; $i<10; $i++):?>
                <input type="number" name="numero[] " id="numero <?php echo $i?>"> <br>
                <?php endfor;?>
                <input type="submit" value="Enviar">            
                
            </form>
    
        </div>


    </main>
    
    
</body>
</html>