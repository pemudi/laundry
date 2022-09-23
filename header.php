<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laundry Cling !</title>
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
      <a class="navbar-brand" href="#">Laundry Cling</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
        </ul>
        <ul class="nav navbar-nav">
      <li class="active"><a href="transaksi.php">Transaksi</a></li>
        </ul>
        <ul class="nav navbar-nav">
      <li class="active"><a href="paket.php">Paket Laundry</a></li>
        </ul>
<      <ul class="nav navbar-nav">
      <li class="active"><a href="tampil_user.php">Data User</a></li>
        </ul>
        <ul class="nav navbar-nav">
      <li class="active"><a href="member.phpp">Data Member</a></li>
        </ul>
    <ul class="nav navbar-nav navbar-right">
       <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
    </ul>
  </div>
</nav>
</body>
</html>