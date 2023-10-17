
<?php
// test
echo "Hello World! <br>";

/* deklarasi variabel */
$nama = "Laila Novia Sari";
$alamat = "Sidoarjo";
$umur = 21;

echo "Halo namaku $nama, tinggal di $alamat, tahun ini umurku $umur tahun";

/* operator aritmatika */
$a = 5;
$b = 2;

/* penjumlahan */
$c = $a + $b;
echo "$a + $b = $c <hr>";

/* pengurangan */
$c = $a - $b;
echo "$a - $b = $c <hr>";

/* perkalian */
$c = $a * $b;
echo "$a * $b = $c <hr>";

/* pembagian */
$c = $a / $b;
echo "$a / $b = $c <hr>";

/* sisa bagi */
$c = $a % $b;
echo "$a % $b = $c <hr>";

/* pangkat */
$c = $a ** $b;
echo "$a ** $b = $c <hr>";

/* operator logika */
$a = 6;
$b = 2;

/* lebih besar */
$c = $a > $b;
echo "$a > $b = $c <hr>";

/* lebih kecil */
$c = $a < $b;
echo "$a < $b = $c <hr>";

/* sama dengan */
$c = $a == $b;
echo "$a == $b = $c <hr>";

/* tidak sama dengan */
$c = $a != $b;
echo "$a != $b = $c <hr>";

/* lebih besar sama dengan */
$c = $a >= $b;
echo "$a >= $b = $c <hr>";

/* lebih kecil sama dengan */
$c = $a <= $b;
echo "$a <= $b = $c <hr>";

/* if-else */
$teman = 'via';

if ($teman == 'via') {
    echo "$teman adalah temanku <br>";
} else {
    echo "$teman bukan temanku <br>";
}

/* if-else if-else */
$teman = 'laila';

if ($teman == 'via') {
    echo "via adalah temanku <br>";
} elseif ($teman == 'laila') {
    echo "laila adalah temanku juga <br>";
} else {
    echo "$teman bukan temanku <br>";
}


?>