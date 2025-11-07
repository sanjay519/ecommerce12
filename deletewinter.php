<?php
session_start();
include "confg.php";

$pro_id=$_GET['id'];


$sql="DELETE  FROM  winter where id='$pro_id'";
$result=mysqli_query($conn, $sql);



echo "<script> location.href = 'winter.php';</script>";



?>