<?php
    if($_GET['id_mahasiswa']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from mahasiswa where id_mahasiswa = '".$_GET['id_mahasiswa']."'");
        if($qry_hapus){
        echo "<script>alert('sukses hapus mahasiswa');location.href='datamahasiswa.php';</script>";
        }else{
        echo "<script>alert('gagal hapus mahasiswa');location.href='datamahasiswa.php';</script>";
        }
    }
?>