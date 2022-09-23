<?php
$conn=mysqli_connect('localhost','root','','laundry');
/* check connection */
if (mysqli_connect_errno()) {
    printf("GAGAL", mysqli_connect_error());
    exit();
}
?>