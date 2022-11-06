<?php
$tinggi = 184 / 100;
$berat = 70;
$tinggi_rumus = $tinggi * $tinggi;
$hasil_akhir = $berat / $tinggi_rumus;
if ($hasil_akhir < 17){
    echo "Sangat Kurus";
} elseif (($hasil_akhir >= 17)&&($hasil_akhir < 18.5)){
    echo "Kurus";
} elseif (($hasil_akhir >= 18.5)&&($hasil_akhir < 25)){
    echo "Normal";
} elseif (($hasil_akhir >= 25)&&($hasil_akhir < 27)){
    echo "Gemuk";
} else {
    echo "Obesitas";
}

?>