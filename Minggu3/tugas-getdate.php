<?php
$sekarang = getdate();
$hari = $sekarang ['mday'];
$bulan = $sekarang ['mon'];
$tahun = $sekarang ['year'];
echo "$hari-$bulan-$tahun";
?>