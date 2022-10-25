<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['jk'];
    $telepon=$_POST['telp'];
    if(empty($nama_member)){
        echo "<script>alert('nama_member tidak boleh kosong');location.href='tambah_member.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama_member, alamat, jk, telp) value ('".$nama_member."','".$alamat."','".$gender."','".$telepon."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Member');location.href='tambah_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
        }
    }
}
?>