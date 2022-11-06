<?php

$arr_angka = ["80", "78", "72", "84", "92", "88"];
$angka = implode(", ",$arr_angka);
echo "Nilai Saya : <b>$angka</b>";
echo "<br/>";

echo "Dari keseluruhan nilai yang paling tinggi ialah : ";
$max 	= max($arr_angka);
echo "<b>$max</b>";
echo "<br/>";

echo "Sedangkan keseluruhan nilai yang paling kecil : ";
$min 	= min($arr_angka);
echo "<b>$min</b>";
echo "<br/>";

$nilai2 = [];
for($i=0; $i < count($arr_angka); $i++){
    array_push($nilai2, $arr_angka[$i]);
}
asort($nilai2);
$output2 = implode(", ",$nilai2);
echo "Apabila diurutkan dari yang terkecil : <b>$output2</b>";
echo "<br />";

$nilai3 = [];
for($i=0; $i < count($arr_angka); $i++){
    array_push($nilai3, $arr_angka[$i]);
}
arsort($nilai3);
$output2 = implode(", ",$nilai3);
echo "Bila diurutkan dari yang terbesar : <b>$output2</b>";
echo "<br />";

echo "Apabila dibulatkan, rata-rata nilai menjadi : ";
$rata = array_sum($arr_angka)/ count($arr_angka) ;
echo "<b>".Round($rata)."</b>";
echo "<br/>";

array_splice($arr_angka,2,1,"75");
echo "Setelah melakukan perbaikan, nilai 72 menjadi ". "<b>" .$arr_angka[2] . "</b>";
echo "<br/>";
echo "Sehingga nilai sekarang menjadi : ". "<b>". implode(", ",$arr_angka). "</b>";
echo "<br/>";

$nilai4 = [];
for($i=0; $i < count($arr_angka); $i++){
    array_push($nilai4, $arr_angka[$i]);
}
arsort($nilai4);
$output2 = implode(", ",$nilai4);
echo "Apabila diurutkan dari terbesar sekarang menjadi : ". "<b>". implode(", ",$nilai4). "</b>";
echo "<br/>";

?>