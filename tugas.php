<?php
    $jambu = 15000;
    $dus = 6;
    $kg = 5;
    $dusbekas = 2000;

    $hasilkos = $jambu * $kg;
    $hasilsu = $hasilkos * $dus;
    $hasillo = $dusbekas * $dus;
    $hasilku = $hasilsu + $hasillo;

    echo "Jadi Penjualan seluruh jambu tersebut adalah ". $hasilku;
?>