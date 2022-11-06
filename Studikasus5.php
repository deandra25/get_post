<?php
$alert=false;
$rincian="";
if(isset($_POST['submit'])){
    if(!empty($_POST['nama']) && (!empty($_POST['nilai']))){
        $alert = false;

        $nama=$_POST['nama'];
        $nilai=$_POST['nilai'];
        if($nilai >= 75){
            $rincian = "happy";
            $text = "Nilai Kompeten";
        }else{
            $rincian = "sad";
            $text = "Nilai Tidak Kompeten";
        }
    }else{
        $alert = true;
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keterangan Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        body {
            background: #94B49F;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            min-height: 100vh;
        }
        .card{
            background: #FFFDE3;
        }
        h3{
            text-align: center;
            font-weight: bold;
            color: green;
        }
        i{
            text-align: center;
            font-size: 50px;
            color:green;
        }
        p{
            text-align: center;
            font-weight: bold;
        }
        h5{
            color:green;
            font-weight: bold;
            text-align: center;
        }
        h4{
            font-weight: bold;
            text-align: center;
        }

        .card-1{
            height: 350px;
            background-color:#CFE8A9;
        }

        .part-1{
            background-color:#FFFDE3;
        }

        .part-0{
            background-color:#FFFDE3;
        }

        .part-2{
            background-color:#90B77D;
            height: 150px;
        }

        .column-2{
            background-color:white;
        }

        .rincian{
            transform : translateY(-15px);
        }
    </style>
  </head>
  <body>

  <div class="container d-flex justify-content-center align-items-center">
    <div class="card p-5 card-1">
        <div class="part-1 d-flex justify-content-between flex-column pb-3">
            <?php
if($rincian == ""){
?>
<i class="far fa-smile"></i>
<?php
}elseif($rincian == "" || $nilai >= 75){
?>
<i class="far fa-laugh-wink"></i>
<?php
}else{
?>

<i class="far fa-sad-cry"></i>
<?php
}
?>
<h2>
    <?php
    if($rincian == "" || $nilai > 100){
        echo "Cek keterangan nilai";
    }else{
        echo $text;
}
?>
</h2>

        </div>
    <form action=''method='POST' class="d-flex justify-content-center flex-column">
    <div class="part-0 d-flex justify-content-between flex-column">
        <div class="col-12">

            </div>
    </div>
    <div class="part-2 d-flex justify-content-between flex-column">
  <div class="row g-3 mb-5">
  <div class="card  col-6 text-center offset-3 text-weight-bold rincian">
  <b> Rincian nilai</b>
                </div>
  <div class="col2 text-center">
      <?php
      if($rincian == "" || $nilai > 100){
        echo "<p>Nama</p>";
      }else{
        echo $nama;
      }
      ?>
      </p>

      <p>Nilai</p>

        <?php
        if($rincian == "" || $nilai > 100){
          echo "<p>-</p>";
        }else{
          echo $nilai;
        }
        ?>
  </div>
</div>
    </div>
</form>
    </div>
    <div class="card p-5 card-1 column-2">
    <?php
  if($rincian == "" || $nilai <= 100){
    ?>
    <h2 class="Judul">Cek Keterangan Nilai</h2>
    <?php
  }
  elseif( $alert == true || $nilai >= 100 ){
    ?>
    <div class="alert d-flex alert-danger judul " role="alert">
      <b>Gagal! </b> &nbsp; <span> Nilai tidak boleh lebih dari 100</span>
    </div>

    <?php
  }
?>
    <form method="post" action="">
    <div class="col">
    <label for="" class="form-label"><b>Nama</b></label>
    <input type="text" class="form-control" placeholder="" name="nama">
  </div>
  <br>
  <div class="row g-3">
  <div class="col">
  <label for="" class="form-label"><b>Nilai</b></label>
    <input type="number" class="form-control" placeholder="" name="nilai">
  </div>
  <button type="submit" class="btn btn-success" name="submit">Kirim</button>
  
</div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </div>
</body>
</html>