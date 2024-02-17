<?php
// Matriks A
$A = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);
// Matriks B
$B = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);
$hasil = array();
for ($c = 0; $c < 3; $c++) {
    for ($d = 0; $d < 3; $d++){
        $hasil [$c][$d] = $A[$c][$d] + $B[$c][$d];
    }
}
echo "Hasil Dari Penjumlahan Matriks A dan B:\n";
for ($c = 0; $c < 3; $c++) {
    for ($d = 0; $d <3; $d++) {
        echo $hasil[$c][$d] . " ";
    }
    echo "\n";
}
?>