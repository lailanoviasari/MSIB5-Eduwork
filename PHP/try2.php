<?php
/* switch */
$angka = 3;

switch ($angka) {
    case 1:
        echo "ini adalah angka 1 <br>";
        break;
    case 2:
        echo "ini adalah angka 2 <br>";
        break;
    case 3:
        echo "ini adalah angka 3 <br>";
        break;

    default:
        echo "not found";
        break;
}

/* for */
for ($i = 0; $i < 10; $i++) {
    echo "Ini perulangan ke-", $i + 1, "<br>";
}
for ($i = 0; $i < 10; $i++) {
    echo "Nilai i+1 = ", $i + 1, "<br>";
}

/* while */
$a = 0;

while ($a < 10) {
    echo "ini perulangan ke-$a <br>";
    $a++;
}

/* do while */
$a = 10;

do {
    echo "ini perulangan ke-$a <br>";
    $a--;
} while ($a > 0);

/* foreach */
$books = [
    "book1",
    "book2",
    "book3",
    "book4",
    "book5",
];

echo "daftar buku:";
echo "<ul>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";

/* nested loop */
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < $i; $j++) { 
        echo "*";
    }
    echo "<br>";
};