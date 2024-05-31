<?php
$numero1='';
$numero2='';
$resultado='';
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if (isset($_POST['somar']))
        $resultado= "Resultado: ".$numero1 + $numero2;
    elseif (isset($_POST['diminuir']))
        $resultado= "Resultado: ".$numero1 - $numero2;
    elseif (isset($_POST['dividir']))
        $resultado= "Resultado: ".$numero1 / $numero2;
    elseif (isset($_POST['multiplicar']))
        $resultado= "Resultado: ".$numero1 * $numero2;
} 
?>
