<?php
$nilai=90;
echo "CONTOH IF ELSE <br>";
if($nilai>80){echo "Selamat Anda Mendapatkan Grade A <br>";}
else {echo "Maaf Anda Belum Dapat Grade A <>br";}
echo "CONTOH SWITCH <br>";
switch ($nilai) {
    case 100 : echo "Nilai yang Dipilih 100 <br>";
    break;
    case 90 : echo "Nilai yang Dipilih 90 <br>";
    break;
} echo "CONTOH FOR <br>";
for ($i= 1; $i< 5; $i++){
    echo "Looping FOR ke :".$i."<br>";
}
echo "CONTOH WHILE <br>";
$j= 1;
while($j<= 5){
    echo "Looping While ke :".$j."<br>";
    $j++;
}
?>