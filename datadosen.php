<?php
include "css.php";
include "navbar.php";
?>
<div class="container">
    <h1 style="text-align: center;">Data Dosen</h1> <br>
    <p style="float: left;">
        <a href="tambah_dosen.php" class="btn btn-success">Tambah Dosen</a>
    </p>
    <br>
    <br>
    <table class="table table-hover table-striped border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TELEPON</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_dosen = mysqli_query($conn, "SELECT * FROM dosen");
            
            $no = 0; 
            while($data_dosen = mysqli_fetch_array($qry_dosen)){
                $no++   ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_dosen['nama_dosen'] ?></td>
                    <td><?= $data_dosen['alamat'] ?></td>
                    <td><?= $data_dosen['telepon'] ?></td>
                    <td>
                        <a href="edit_dosen.php?id_dosen= <?= $data_dosen['id_dosen'] ?>" class="btn btn-success">Edit</a> |
                        <a href="delete_dosen.php?id_dosen= <?= $data_dosen['id_dosen'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php           
            }
            ?>             
        </tbody>
    </table>
</div>
