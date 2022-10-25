<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role'] == 'admin'){
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h1><b>Tampil User</b></h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th><h3>NO</h3></th><th><h3>NAMA</h3></th><th><h3>USERNAME</h3></th><th><h3>ROLE</h3></th><th><h3>AKSI</h3></th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include "koneksi.php";
$qry_user=mysqli_query($conn,"select * from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
            $no++;?>
            <tr>
                <td><h4><?=$no?></h4></td>
                <td><h4><?=$data_user['nama']?></h4></td>
                <td><h4><?=$data_user['username']?></h4></td>
                <td><h4><?=$data_user['role']?><h4></td>
                <td><a href="ubah_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-success"><h4>Ubah</h4></a> | <a href="hapus_user.php?id_user=<?=$data_user['id_user']?>" 
                onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><h4>Hapus</h4></a></td>
            </tr>
            <?php 
            }
        }
            ?>
        </body>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
    </table>
    <a href="tambah_user.php" class="btn btn-primary">Tambah User</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>