<?php
$nilaiK = 50;
$nilaiP = 70;

$rataRata = round(($nilaiK+$nilaiP)/2);
?>

<h2 style="<?= $rataRata >=75 ? "color:green;" : "color:red;" ?>"><?= $rataRata ?></h2>