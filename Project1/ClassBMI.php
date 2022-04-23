<!DOCTYPE html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<form>
  <div class="container">
      <h2 class="text-center mb-5">Form Pasien</h2>
      <form action="HalamanBMI.php" method="GET">
      <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama_lengkap" type="text" class="form-control">
          </div>
        </div> 
    </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat</label> 
    <div class="col-8">
      <input id="berat" name="berat__" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <input id="umur" name="umur" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="form-check mr-auto">
        <input class="form-check-input" type="radio" id="laki" name="jenis_kelamin" value="laki-laki"> 
        <label class="form-check-label mr-5" for="laki">Laki-Laki</label>
      </div>
      <div class="custom-cdiv class="form-check mr-auto">
        <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"> 
        <label class="form-check-label mr-5" for="laki">Perempuan</label>
      </div>
      </div>
    </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="SIMPAN" name="proses">
    </div>
  </div>
</form>
</form>

<hr>
<?php require_once "ClassBMI.php"; ?>

<div class="contrainer">
  <h2 class="text-center mb-5">Data BMI Pasien</h2>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Gender</th>
        <th scope="col">Umur</th>
        <th scope="col">Berat</th>
      </tr>
      <tr>                                      
      <td class="text-center">1</td>
      <td>Yapan</td>
      <td class="text-center">L</td>
      <td class="text-center">19</td>
      <td class="text-center">43.5</td>
      </tr>
      <tr>                                      
      <td class="text-center">2</td>
      <td>Mahdi</td>
      <td class="text-center">L</td>
      <td class="text-center">17</td>
      <td class="text-center">47.5</td>
      </tr>
      <tr>                                      
      <td class="text-center">3</td>
      <td>Yasmin</td>
      <td class="text-center">L</td>
      <td class="text-center">18</td>
      <td class="text-center">45.7</td>
      </tr>                                                                                                                  </tbody>
    </thead>
</div>
</table>

