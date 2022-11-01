<?php 
include "css.php";
include "navbar.php";
?>

<div class="container">
<h1 style="text-align: center;">Tambah Jurusan</h1>
    <form action="proses_tambah_jrs.php" method="POST">
        Nama :
        <input type="text" name="nama_jurusan" value="" class="form-control"> <br>
        <input type="submit" name="simpan" value="Tambah Jurusan" class="btn btn-primary">
        <a href="datajurusan.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
</div>
