<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'calculadora.php'; ?>
<div class="calculadoraContainer">
    <h4> CALCULADORA</h4>
    <form action="index.php" id="calculadora" method="POST">
        <input type="number" name="numero1" value="<?php echo $numero1; ?>"><br>
        <input type="number" name="numero2" value="<?php echo $numero2; ?>"><br>
        <button type="submit" name="somar">+</button>
        <button type="submit" name="diminuir">-</button>
        <button type="submit" name="dividir">/</button>
        <button type="submit" name="multiplicar">*</button>
        <div name="resultado">
    </form>
</div>
    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</body>
</html>