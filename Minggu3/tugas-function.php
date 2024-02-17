<?php
function bilangan_terbesar ($bilangan1, $bilangan2) {
    if ($bilangan1 > $bilangan2) {
        return $bilangan1;
    } else {
        return $bilangan2;
    }
}
// Contoh Penggunaan Fungsi
$bilangan1 = 100;
$bilangan2 = 150;
$hasil_terbesar = bilangan_terbesar($bilangan1, $bilangan2);
echo "Bilangan Terbesar Adalah: ". $hasil_terbesar;
?>