<?php 
    include "header.php";
?>
<center><h2> 안녕 하세요 <?=$_SESSION['nama']?> <br><h1>LAUNDRY JAEMIN</h1></br></h2></center>
<?php
    include "footer.php";
?>
<br>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <?php
          include "koneksi.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <div class="container">
            <div style="width:1000px;float:left;">
            <h1>Paket Masuk</h1>
                <form action="masukkan_keranjang.php" class="well form-horizontal" method="post">
                    <h3>Paket</h3> 
                    <select name="nama_paket" class="form-control">
                        <option></option>
                        <?php
                            $qry_paket=mysqli_query($conn,"select * from paket");
                            
                            while($data_paket=mysqli_fetch_array($qry_paket)){
                        ?>
                        <option value="<?=$data_paket['id_paket']?>"><?=$data_paket['nama_paket']?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <h3>Jumlah</h3> 
                    <input type="number" name="jumlah" value= "1" class="form-control">
                    <br>
                    <input type="submit" name="simpan" value="MASUK KERANJANG" class="btn btn-primary">
                        </br>
                </form>
            </div>
            <div style="width:1000px;float:left;">
                <h1>Total Transaksi</h1>
                <table class="table table-hover striped">
                    <thead>
                        <tr>
                            <th><h3>NO</32></th><th><h3>Jenis Paket</h3></th><th><h3>Jumlah</h3></th><th><h3>Total<h3></th><th><h3>Aksi</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_SESSION['cart'])){
                            foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
                        ?>
                        <tr>
                            <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_paket']?></td><td><?=$val_produk['qty']?></td><td><?=$val_produk['harga'] * $val_produk['qty']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php } ?>
                    </tbody>
                </table>
                <form action="checkout.php" class="well form-horizontal" method="post">
                    <h3>Nama Member</h3> 
                    <select name="nama" class="form-control">
                        <option></option>
                        <?php
                            $qry_member=mysqli_query($conn,"select * from member");
                            
                            while($data_member=mysqli_fetch_array($qry_member)){
                        ?>
                        <option value="<?=$data_member['id_member']?>"><?=$data_member['nama_member']?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <h3>Status</h3> 
                    <?php 
                        $arr_status=array('lunas'=>'Dibayar','belum_lunas'=>'Belum DIbayar');
                    ?>
                    <select name="status" class="form-control">
                        <option></option>
                        <?php foreach ($arr_status as $key_status => $val_status):?>
                        <option value="<?=$key_status?>"><?=$val_status?></option>
                        <?php endforeach ?>
                    </select>
                    <br>
                    <input type="submit" name="simpan" value="CHECKOUT" class="btn btn-primary">
                        </br>
                </form>
            </div>
        </div>
    </body>
</html>