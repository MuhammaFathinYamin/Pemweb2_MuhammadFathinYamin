<?php
    require_once "class_persegipanjang.php";

    $hasil = new PersegiPanjang(15, 40);
    echo $hasil->getLuas();
    echo "<br>";
    echo $hasil->getKeliling();
?>