<?php
$operator="";
$text="";
$alert=false;

  if(isset($_POST["submit"])){
    if(!empty($_POST["angka1"]) && (!empty($_POST["angka2"]))){
        $alert = false;

        $angka1=$_POST["angka1"];
        $angka2=$_POST["angka2"];

        if($angka1 === $angka2){
            $operator="sama dengan";
            $text=$angka1 . " sama dengan " . $angka2;
        }elseif($angka1 > $angka2){
            $operator="lebih besar";
            $text=$angka1 . " lebih besar dari " . $angka2;
        }else{
            $operator="lebih kecil";
            $text=$angka1 . " lebih kecil dari " . $angka2;
        }
    }else{
        $alert=true;
    }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perbandingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        body {
            background: #3D8361;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            min-height: 100vh;
        }
        .card{
            background: #D6CDA4;
        }
        h3{
            text-align: center;
        }
        i.fa-solid{
            text-align: center !important;
            font-size: 50px;
        }
        p{
            text-align: center;
            font-weight: bold;
        }

    </style>
  </head>
  <body>
  
  <div class="container d-flex justify-content-center align-items-center">
    <div class="card p-5">
    <form action=''method='POST' class="d-flex justify-content-center flex-column">
        <?php if($alert == true ){
            ?>
            <div class="alert d-flex alert-danger" role="alert">
            <i class="fas fa-exclamation-triangle text-danger "></i>
            <div>
              Input ini tidak boleh kosong
          </div>
        </div>
          <?php
        }?>

    <?php 
    if ($operator == "" || $operator == "sama dengan") {
    ?><i class="fa-solid fa-equals text-center"></i>
    <?php
    }elseif ($operator == "" || $operator < "lebih dari") {
        ?><i class="fa-solid fa-chevron-right"></i>
        <?php
    }else{
        ?><i class="fa-solid fa-chevron-left"></i>
        <?php
    }
    ?>
    <h3 class="text-center">
    <?php
    if ($operator == ""){
        echo "Perbandingan";
    }else{
        echo $text;
    }
    ?>
    </h3>
    
        
  <div class="row g-3">
  <div class="col">
    <input type="number" class="form-control" placeholder="Angka Pertama" name="angka1">
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="Angka Kedua" name="angka2">
  </div>
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
</div>
</form>
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>