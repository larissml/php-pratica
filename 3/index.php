<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operações</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="numeros">
    <form id="operacao" method="POST">
        Digite um número inteiro: <input type="number" name="numero1" step=1><br>
        Digite outro número inteiro: <input type="number" name="numero2" step=1><br>
        Digite um número real: <input type="number" name="numero3" step=0.01><br>
        <input type="submit" value="enviar">
    </form>
</div>
    <div class="resultado">
        <?php include 'operacao.php'; ?>
    </div>

</body>
</html>