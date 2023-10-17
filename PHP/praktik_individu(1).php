<?php
for ($i=0; $i < 10; $i++) { 
    $angka = $i+1;

    echo $angka;

    if ($angka%2 == 0) {
        echo " adalah bilangan genap <br>";
    } else {
        echo " adalah bilangan ganjil <br>";
    }
    
}