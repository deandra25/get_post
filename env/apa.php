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

<?php
if($rincian == ""){
?>
<i class="far fa-smile"></i>
<?php
}elseif($rincian == "" || $nilai > 75){
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

<form>
  <div class="card col-4 text-center offset-4 rincian ">
    <b> Rincian nilai</b>
</div>
<div class="row text-center ">
  <div class="col">
    <p class="name">
      <?php
      if($rincian == "" || $nilai > 100){
        echo "<p>Nama</p>";
      }else{
        echo $nama;
      }
      ?>
      </p>

      <p>Nilai</p>

        <p>
        <?php
        if($rincian == "" || $nilai > 100){
          echo "<p>-</p>";
        }else{
          echo $nilai;
        }
        ?>
          </p>
          <br>
        </div>
      </div>
    </form>
</div>

<div class="col-4 justify-content-center form-2">
  <?php
  if($rincian == "" || $nilai <= 100){
    ?>
    <h2 class="Judul">Cek Keterangan Nilai</h2>
    <?php
  }
  elseif( $alert == true || $nilai >= 100 ){
    ?>
    <div class="alert d-flex alert-danger judul " role="alert">
      <b>Gagal! </b> <span> Nilai tidak boleh lebih dari 100</span>
    </div>

    <?php
  }
?>

<form method="post" action="">
  <div class="mb-3">
    <label for="" class="form-label"><b>Nama</b></label>
    <input type="text" class="form-control" placeholder="" name="nama">
  </div>
  <div class="mb-3">
    <label for="" class="form-label"><b>Nilai</b></label>
    <input type="number" class="form-control" placeholder="" name="nilai">
</div>
<button type="submit" class="btn btn-success" name="submit">Kirim</button>
</form>