<?php

include "koneksi.php";
include "css.php";
include "navbar.php";

$qry_get_dosen = mysqli_query($conn, "SELECT * FROM dosen WHERE id_dosen = '" . $_GET['id_dosen'] . "'");
$data_dosen = mysqli_fetch_array($qry_get_dosen);
?>

<div class="container">
    <h3 style="text-align: center; padding-top: 20px;">Edit Dosen</h3>
    <form action="proses_edit_dos.php" method="POST">
        <input type="hidden" name="id_dosen" value="<?= $data_dosen['id_dosen'] ?>">
        Nama :
        <input type="text" name="nama_dosen" value="<?= $data_dosen['nama_dosen']?>" class="form-control"> <br>
        ALAMAT :
        <input type="text" name="alamat" value="<?= $data_dosen['alamat']?>" class="form-control"> <br>
        TELEPON :
        <input type="text" name="telepon" value="<?= $data_dosen['telepon']?>" class="form-control"> <br>
        <br><br>
        <input type="submit" name="simpan" value="Edit Dosen" class="btn btn-primary">
        <a href="datadosen.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
</div>