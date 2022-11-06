<title>Array Multidimensi</title>

<?php
$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

foreach ($matrik as $angka => $matrikss) {
?>
<p>Item pada baris ke-<?= $angka+1 ?> apabila diurutkan dari belakang menjadi :</p>
<?php
    for ($angkass=count($matrikss)-1; $angkass >= 0 ; $angkass--) {
?>
    <?=$matrikss[$angkass]?>
    <br>
<?php
    }
}
?>