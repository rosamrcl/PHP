<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="boletim.php" method="post">
            <?php for ($i =0; $i < 10; $i++):?>
                <label for="nome <?php echo $i;?>">Nome <?php echo $i +1;?></label>
                <input type="text" placeholder="Nome" id="nome <?php echo $i; ?>" name="nome[]"><br>
                <label for="nota <?php echo $i;?>">Nota <?php echo $i +1;?></label>
                <input type="number" placeholder="Nota" id="nota <?php echo $i; ?>" name="nota[]" step="0.01"><br><br>
            <?php endfor; ?>
                <input type="submit" value="Enviar">
        </form>
    </main>
    
</body>
</html>