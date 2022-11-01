<?php
include "css.php";
include "navbar.php";
?>
<div class="container">
    <h1 style="text-align: center;">Data Jurusan</h1> <br>
    <p style="float: left;">
   
        <a href="tambah_jurusan.php" class="btn btn-success">Tambah Jurusan</a>
    </p>
    <br>
    <br>
    <table class="table table-hover table-striped  border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_jurusan = mysqli_query($conn, "SELECT * FROM jurusan");           
            $no = 0; 
            while($data_jurusan = mysqli_fetch_array($qry_jurusan)){
                $no++ ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_jurusan['nama_jurusan'] ?></td>
                    <td>
                        <a href="edit_jurusan.php?id_jurusan= <?= $data_jurusan['id_jurusan'] ?>" class="btn btn-success">Edit</a> |
                        <a href="delete_jurusan.php?id_jurusan= <?= $data_jurusan['id_jurusan'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php           
            }
            ?>      
        </tbody>
    </table> 
</div>