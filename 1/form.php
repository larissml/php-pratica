<?php
$perimetro = $_POST['raio'] * M_PI * 2;
$area=$_POST['raio']**2 * M_PI;
    echo "Perímetro: ".$perimetro."<br>";
    echo "Área: ".$area;
?>