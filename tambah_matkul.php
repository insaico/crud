<?php 
include "css.php";
include "navbar.php";
?>

<div class="container">
    <h1 style="text-align: center;">Tambah Matakuliah</h1>
    <form action="proses_tambah_mk.php" method="POST">
        Nama :
        <input type="text" name="nama_matkul" value="" class="form-control"> <br>
        <input type="submit" name="simpan" value="Tambah Matkul" class="btn btn-primary">
        <a href="datamatkul.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
</div>
