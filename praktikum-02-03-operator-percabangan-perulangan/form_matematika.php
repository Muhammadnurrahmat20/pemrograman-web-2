<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FORM MATEMATIKA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"crossorigin="anonymous" />
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="row mt-3">
        <div class="card">
          <div class="card text-center">
            <h1>OPERATOR ARITMATIKA</h1>
            <p>20202205088 - Muhammad Nur Rahmat</p>

            <?php
              $hari = date ("l");
              switch ($hari){
                case"Sunday":
                  $hari="Minggu";
                break;
                case"Monday":
                  $hari="Senin";
                break;
                case"Tuesday":
                  $hari="Selasa";
                break;
                case"Wednesday":
                  $hari="Rabu";
                break;
                case"Thursday":
                  $hari="Kamis";
                break;
                case"Friday":
                  $hari="Jumat";
                break;
                case"Saturday":
                  $hari="Sabtu";
                break;
              }
              
              $bulan = date ("F");
              switch ($bulan){
                case"January":
                  $bulan="Januari";
                break;
                case"February":
                  $bulan="Februari";
                break;
                case"March":
                  $bulan="Maret";
                break;
                case"April":
                  $bulan="April";
                break;
                case"May":
                  $bulan="Mei";
                break;
                case"June":
                  $bulan="Juni";
                break;
                case"July":
                  $bulan="Juli";
                break;
                case"August":
                  $bulan="Agustus";
                break;
                case"September":
                  $bulan="September";
                break;
                case"October":
                  $bulan="Oktober";
                break;
                case"November":
                  $bulan="November";
                break;
                case"December":
                  $bulan="Desember";
                break;
              }
              date_default_timezone_set ('Asia/Makassar');
              echo $hari.date (", d "),$bulan.date(" Y H:i:s");
            ?>

          </div>
          <div class="card-body">
            <form action="form_matematika.php" method="post">
              <div class="row mb-3">
                  <label for="inputnumber3"class="col-sm-3 col-form-label">Angka Pertama</label>
                <div class="col-sm-9">
                  <input type="number"class="form-control"id="inputnumber3"name="txtangka1">
                </div>
              </div>
              <div class="row mb-3">
                  <label for="inputnumber3"class="col-sm-3 col-form-label">Angka Kedua</label>
                <div class="col-sm-9">
                  <input type="number"class="form-control"id="inputnumber3"name="txtangka2">
                </div>
              </div>
              <button type="submit" class="btn btn-success">HITUNG</button>
              <p>
              <?php
               $pertama = isset ($_POST["pertama"]) ? $_POST["pertama"] : "";
               $kedua = isset ($_POST["kedua"]) ? $_POST["kedua"] : "";
               if (empty($pertama))
               {
                 echo '<div class="alert alert-danger" role="alert">Angka Pertama Tidak Boleh Kososng </div>';
               }
               else if (empty($kedua))
               {
                 echo '<div class="alert alert-danger" role="alert">Angka Kedua Tidak Boleh Kososng </div>';

               }
               else if ($pertama < $kedua )
               {
                 echo '<div class="alert alert-danger" role="alert">Angka Pertama Tidak Boleh lebih kecil daripada angka kedua </div>';

               }
               else{
                 echo "Hasil Penjumlahan = ".($pertama + $kedua)."<br/>";
                 echo "Hasil Pengurangan = ".($pertama - $kedua)."<br/>";
                 echo "Hasil Perkalian = ".($pertama * $kedua)."<br/>";
                 echo "Hasil Pembagian = ".($pertama / $kedua)."<br/>";
                 echo "Sisa Hsail Bagi = ".($pertama % $kedua)."<br/>";
               }
              ?>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  </body>
</html>
