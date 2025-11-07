<?php
session_start();
include "confg.php";

$pro_id=$_GET['id'];


$sql="DELETE  FROM  women where id='$pro_id'";
$result=mysqli_query($conn, $sql);



echo "<script> location.href = 'women.php';</script>";



?>