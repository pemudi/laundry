<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><h1>LAUNDRY JAEMIN</h1></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><h1>JAEMIN <h4>나재민</h4></h1></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php"><h3>Home</h3></a></li>
        </ul>
        <ul class="nav navbar-nav">
      <li class="active"><a href="histori_transaksi.php"><h3>Transaksi</h3></a></li>
        </ul>
        <ul class="nav navbar-nav">
      <li class="active"><a href="tampil_paket.php"><h3>Paket Laundry</h3></a></li>
        </ul>
<      <ul class="nav navbar-nav">
      <li class="active"><a href="tampil_user.php"><h3>User</h3></a></li>
        </ul>
        <ul class="nav navbar-nav">
      <li class="active"><a href="tampil_member.php"><h3>Member</h3></a></li>
        </ul>
    <ul class="nav navbar-nav navbar-right">
       <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php"><h3>Logout</h3></a>
            </li>
    </ul>
    </ul>
                <h6 style="padding-left: 5px;"><?=$_SESSION['nama']?></h6>
  </div>
</nav>
</body>
</html>