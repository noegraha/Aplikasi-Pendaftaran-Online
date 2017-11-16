<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Login</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Pendaftaran Online</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informasi
       <span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="#">Tentang</a></li>
         <li><a href="#">Tata cara Pendaftaran</a></li>
         <li><a href="#">FAQ</a></li>
       </ul>
     </li>
      <li><a href="./../on-member/pendaftaran.php">Pendaftaran</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="./../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Formulir Pendaftaran</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama</label>
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md">
  <span class="help-block">*Masukkan nama lengkap tanpa gelar</span>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="jenis kelamin">Jenis Kelamin</label>
  <div class="col-md-2">
    <select id="jenis kelamin" name="jenis kelamin" class="form-control">
      <option value="1">Pria</option>
      <option value="2">Wanita</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="No HP/WA/BBM">No HP/WA/BBM</label>
  <div class="col-md-4">
  <input id="No HP/WA/BBM" name="No HP/WA/BBM" type="text" placeholder="No HP/WA/BBM" class="form-control input-md">
  <span class="help-block">*Masukkan nomor handphone yang aktif dimulai nomor kode negara contoh : 6282123456789</span>
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pas foto">Pas foto</label>
  <div class="col-md-4">
    <input id="pas foto" name="pas foto" class="input-file" type="file">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Alamat tinggal">Alamat tinggal</label>
  <div class="col-md-4">
    <textarea class="form-control" id="Alamat tinggal" name="Alamat tinggal">Alamat tinggal</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Alamat KTP">Alamat KTP</label>
  <div class="col-md-4">
    <textarea class="form-control" id="Alamat KTP" name="Alamat KTP">Alamat</textarea>
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="KTP">KTP</label>
  <div class="col-md-4">
    <input id="KTP" name="KTP" class="input-file" type="file">
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="SIM">SIM</label>
  <div class="col-md-4">
    <input id="SIM" name="SIM" class="input-file" type="file">
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="STNK">STNK</label>
  <div class="col-md-4">
    <input id="STNK" name="STNK" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kirim">Submit</label>
  <div class="col-md-4">
    <button id="kirim" name="kirim" class="btn btn-success">Kirim</button>
  </div>
</div>

</fieldset>
</form>
