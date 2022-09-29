<?php
if($_POST){
    $id_paket=$_POST['id_paket'];
    $nama_paket=$_POST['nama_paket'];
    $harga=$_POST['harga'];
    if(empty($nama_paket)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_paket.php';</script>";

    } elseif(empty($harga)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";
               if($update){
                echo "<script>alert('Sukses update paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id_paket=".$id_paket."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update paket set nama='".$nama_paket."', harga='".$username."',  where id_paket = '".$id_paket."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id_paket=".$id_user."';</script>";
            }
        }
        
    } 
}
?>