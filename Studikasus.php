<title>Formulir</title>

<?php
session_start();

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $nis = $_SESSION['nis'];
    $rayon = $_SESSION['rayon'];
} else {
    $name = [];
    $nis = [];
    $rayon = [];
}


if (isset($_POST['name'])) {
    $name[] = $_POST["name"];
    $nis[] = $_POST["nis"];
    $rayon[] = $_POST['rayon'];
}


$_SESSION["name"] = $name;
$_SESSION["nis"] = $nis;
$_SESSION["rayon"] = $rayon;
?>

<form align="center" method="post" action="">
<h1 align="center">Formulir Data Siswa</h1>
<table border="1" align="center">
<tr>
    <td>Nama</td>
    <td><input type="text" name="name"></td>
</tr>
<tr>
    <td>Nis</td>
    <td><input type="text" name="nis"></td>
</tr>
<tr>
    <td>Rayon</td>
    <td><input type="text" name="rayon"></td>
</tr>
<tr>
    <td><input type="submit" value="Submit"></td>
</tr>
</table><br>
<button ><a href="destroy.php">Hapus Data</a></button>
    <br>
    <hr>
    <?php
    // $num = 0;
    foreach ($name as $key => $value) {
        // $num++;
        echo "<table align='center' border='1'><tr><td>Nama<td>$name[$key]</td></td> <tr><td>Nis<td>$nis[$key]</td></td></tr><tr><td>Rayon</td><td>$rayon[$key]</td></td></tr></table><br>";
    }
    ?>
    <br>

</form>