<?php

$barang = [
    [
        "produk" => "Televisi",
        "diskon" => 15,
        "harga" => 1600000
    ],
    [
        "produk" => "Kulkas",
        "diskon" => 30,
        "harga" => 3000000
    ],
    [
        "produk" => "Komputer",
        "diskon" => 0,
        "harga" => 2300000
    ]
];

if(isset($_POST['hitung'])){
    $produk = $_POST['produk'];
    $total = $_POST["total"];
    
    foreach($barang as $databrng){
        if($databrng['produk'] === $produk){
            $produkdiskon = $databrng['diskon'];

            $totalharga= ($total * $databrng['harga']);
            $hasildiskon = $totalharga - ($totalharga * $databrng['diskon'] /100);
        
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Harga Total</title>
</head>
<body>
    <center><h1>Cek Total Harga</h3></center>
    <form method="post" action="">
        <table align="center" border="2" cellspacing="2" cellpadding="5">
            <tr>
                <td><label for="">Barang</label></td>
                <td><select name="produk">
                    <option hidden>Pilih Barang</option>
                    <?php
                    foreach($barang as $databrng){
                        echo"<option value='$databrng[produk]'>$databrng[produk]</option>";
                    }
                    ?>

                </select>
                </td>
                </tr>
                <tr>
                    <td><label for="">Total Barang</label></td>
                    <td><input type="number" name="total" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"><button name="hitung">Kirim</button></td>
                </tr>
        </table>
    </form>
<?php

if(isset($produkdiskon)) {
    if($produkdiskon > 0){
        echo "<br>";
        echo "<center>". $produk . " X ". $total . " = Rp ". number_format($hasildiskon,2,",",".") ."<center>";

    }else{
        echo "<br>";
        echo "<center>". $produk . " X ". $total . " = Rp ". number_format($totalharga,2,",",".") . "</center>";
    }
}

?>
</body>
</html>