<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <h1><b>Histori Transaksi</b></h1>
        <table class="table table-hover">
            <thead style="text-align:center;">
                <th><h3>NO</h3></th><th><h3>Nama Member</h3></th><th><h3>Tanggal Transaksi</h3></th><th><h3>Batas Waktu</h3></th><th><h3>Tanggal Bayar</h3></th><th><h3>Status</h3></th><th><h3>Dibayar</h3></th><th><h3>Keterangan Status</h3></th><th><h3>Keterangan Dibayar</h3></th><th><h3>Aksi</h3></th>
            </thead>
            <tbody style="text-align:center;">
                <?php 
                    include "koneksi.php";
                    $qry_histori=mysqli_query($conn,"select *,transaksi.id_transaksi AS id_transaksi from transaksi join member on transaksi.id_member = member.id_member order by transaksi.id_transaksi desc");
                    $no=0;
                    while($dt_histori=mysqli_fetch_array($qry_histori)){
                        $no++;
                        $button_lunas="<a href='lunas.php?id=".$dt_histori['id_transaksi']."' class='btn btn-success' onclick='return confirm(\"Apakah anda yakin?\")'>Lunas</a>";
                        $button_proses="<a href='update_transaksi.php?id=".$dt_histori['id_transaksi']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Proses</a>";
                        $button_selesai="<a href='update_transaksi.php?id=".$dt_histori['id_transaksi']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Selesai</a>";
                        $button_diambil="<a href='update_transaksi.php?id=".$dt_histori['id_transaksi']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Diambil</a>";
                        $button_cetak="<a href='cetak.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning'>Cetak</a>";
                        $button_cetak_detail="<a href='detail_transaksi.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning'>Cetak Detail</a>";
                    ?>
                <tr>
                    <td><h4><?=$no?></h4></td>
                    <td><h4><?=$dt_histori['nama_member']?></h4></td>
                    <td><h4><?=$dt_histori['tgl_transaksi']?></h4></td>
                    <td><h4><?=$dt_histori['batas_waktu']?></h4></td>
                    <td><h4><?=$dt_histori['tgl_bayar']?></h4></td>
                    <td><h4><?=$dt_histori['status_order']?></h4></td>
                   
                    <?php 
                        $dibayar='';

                        if ($dt_histori['status_bayar'] =="lunas") {
                            $dibayar = '<span class="badge bg-success"><h5>Lunas</h5></span>';
                        } else {
                            $dibayar = '<span class="badge bg-danger"><h5>Belum Lunas</h5></span>';
                        }
                        ?>
                    <td><?=$dibayar?></td>
                    <td>
                    <?php
                            if ($dt_histori['status_order'] == "baru") {
                            ?>
                            <a href="update_transaksi.php?id_transaksi=<?=$dt_histori['id_transaksi']?>&status_order=diproses"><button>Diproses</button></a>
                            <?php
                            } elseif ($dt_histori['status_order'] == "diproses") {
                            ?>
                            <a href="update_transaksi.php?id_transaksi=<?=$dt_histori['id_transaksi']?>&status_order=selesai"><button>Selesai</button></a>
                            <?php
                            } elseif ($dt_histori['status_order'] == "selesai") {
                            ?>
                            <a href="update_transaksi.php?id_transaksi=<?=$dt_histori['id_transaksi']?>&status_order=diambil"><button>Diambil</button></a>
                            <?php
                            } elseif ($dt_histori['status_order'] == "diambil") {
                            ?>
                            <a href="#"><button class = "done">✔</button></a>
                            <?php
                            }
                            ?>
                            </td>
                            <td>
                                
                    <?php
                            if ($dt_histori['status_bayar'] == "belum_lunas") {
                            ?>
                            <a href="ubah_status.php?id_transaksi=<?=$dt_histori['id_transaksi']?>"><button>Lunas</button></a> 
                            <?php
                            } else {
                            ?>
                            <a href="#"><button class = "done">✔</button></a> 
                            <?php
                            }
                            ?>
                    
                    </td>
                    <td><?=$button_cetak_detail?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>