<?php
include "css.php";
include "navbar.php";
?>
<div class="container">
    <h1 style="text-align: center;">Data Jadwal Kuliah</h1> <br>
    <p style="float: left;">      
        <a href="tambah_jadwal.php" class="btn btn-success">Tambah Jadwal Kuliah</a>
    </p>
    <br>
    <br>
    <table class="table table-hover table-striped  border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>HARI</th>
                <th>JAM</th>
                <th>Matkul</th>
                <th>Dosen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include "koneksi.php";
            $qry_jadwal_kuliah = mysqli_query($conn, "SELECT * FROM jadwalkuliah 
            INNER JOIN matakuliah  ON matakuliah.id_matkul = jadwalkuliah.id_matkul 
            INNER JOIN dosen ON dosen.id_dosen = jadwalkuliah.id_dosen");
            $no = 0;
            while ($data_jadwal = mysqli_fetch_array($qry_jadwal_kuliah)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_jadwal['hari'] ?></td>
                    <td><?= $data_jadwal['jam'] ?></td>
                    <td><?= $data_jadwal['nama_matkul'] ?></td>
                    <td><?= $data_jadwal['nama_dosen'] ?></td>
                    <td>
                    <a href="edit_jadwal.php?id_jadwal= <?= $data_jadwal['id_jadwal'] ?>" class="btn btn-success">Edit</a> |
                    <a href="delete_jadwal.php?id_jadwal= <?= $data_jadwal['id_jadwal'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>