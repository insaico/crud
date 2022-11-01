<?php
include "css.php";
if ($_GET['id_jurusan']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($conn, "DELETE FROM jurusan WHERE id_jurusan ='" . $_GET['id_jurusan'] . "'");

    if ($qry_hapus) {
        echo "<script>
        alert('Sukses hapus data jurusan'); location.href='datajurusan.php'
        </script>";
    } else {
        echo "<script>alert('Gagal hapus data jurusan'); location.href='datajurusan.php'</script>";
    }
}
?>