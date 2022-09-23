<?php
session_start();
include 'navbar.php';
include 'connect.php';

$query ="SELECT * FROM paket";

$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);

?>

<html>
    <head>
        <title>Paket</title>
</head>
<body>
<div class="container">
    <h3> Cucian Laundry Kita Semua </h3>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Paket</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
if($num >0){
    $no = 1;
    while($data = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $data['nama_paket'] . "</td>";
        echo "<td>" . $data['jenis'] . "</td>";
        echo "<td>" . $data['harga'] . "</td>";
        echo "<td><a href='form_update_cucian.php?id=" . $data['id'] . "'>Edit</a> ";
        echo "<td><a href='delete_cucian.php?id=" . $data['id'] . "'onClick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")' >Delete</a></td>";
        $no++;
    }
}else{
    echo "<td colspan='3'>Tidak ada data</td>";
}
?>
</tbody>
</table>
<br>
<button><a href="form_cucian.php">Tambah</a></button>
</div>
</body>
</html>