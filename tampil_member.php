<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role'] == 'admin'){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h1><b>Data Member</b></h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th><h3>NO</h3></th>
                <th><h3>ID</h3></th>
                <th><h3>NAMA</h3></th>
                <th><h3>ALAMAT</h3></th>
                <th><h3>GENDER</h3></th>
                <th><h3>TELEPON</h3></th>
                <th><h3>AKSI</h3></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
                $no++;
                ?>
                <tr>              
                    <td><h4><?=$no?></h4></td>
                    <td><h4><?=$data_member['id_member']?></h4></td>
                    <td><h4><?=$data_member['nama_member']?></h4></td> 
                    <td><h4><?=$data_member['alamat']?></h4></td>
                    <td><h4><?=$data_member['jk']?></h4></td> 
                    <td><h4><?=$data_member['telp']?></h4></td> 
                    <td><a href="ubah_member.php?id_member=<?=$data_member['id_member']?>" class="btn btn-success">Ubah</a> | <a href="hapus_member.php?id_member=<?=$data_member['id_member']?>" 
                     onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php 
            }
            ?>
        </body>
    </table>
    <a href="tambah_member.php" class="btn btn-primary">Tambah Member</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>