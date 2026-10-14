<?php

// Challenge 1 -- Program yang menentukan ganjil genap dari 1-20
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 === 0) echo $i . ' adalah angka genap...';
    if ($i % 2 === 1) echo $i . ' adalah angka ganjil...';
    echo '<br>';
}

// Challenge 2 -- Program perkalian 10x10 dengan nested loop
for ($i = 1; $i <= 10; $i++) {
    echo "10 x $i : " . 10 * $i;
    echo '<br>';
}

// Challenge 3 -- Program cetak pola bintang segitiga
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo '*';
    }
    echo '<br>';
}
