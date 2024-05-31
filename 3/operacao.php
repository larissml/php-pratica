<?php
if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    $resultado1=($numero1*2)*($numero2/2);
    $resultado2=($numero1*3) + $numero3;
    $resultado3=(pow($numero3,3));

    echo "o produto do dobro do primeiro com metade do segundo: ".$resultado1." <br>";
    echo "a soma do triplo do primeiro com o terceiro: ".$resultado2." <br>";
    echo "o terceiro elevado ao cubo: ".$resultado3." <br>";
}
?>