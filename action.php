<?php 

require 'confg.php';

if(isset($_POST['pid'])){

    $username=$_POST['username'];
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pprice=$_POST['pprice'];
	$pimage=$_POST['pimage'];
	$pcode=$_POST['pcode'];
	$pqtyy=1;
   
  

   $stmt=$conn->prepare("SELECT product_code FROM cart WHERE product_code=?");
   $stmt->bind_param("s", $pcode);
   $stmt->execute();
   $res=$stmt->get_result();
   $r= $res->fetch_assoc();
   $code = $r['product_code'];


   if(!$code)
   	{
  
    $query=$conn->prepare("INSERT INTO cart(username,product_name, product_price,product_image,qtyy,total_price,product_code)
    	VALUES(?,?,?,?,?,?,?)");
    $query->bind_param("ssssiss",$username,$pname,$pprice,$pimage, $pqtyy,$pprice,$pcode);
    $query->execute();
    echo'<div class="alert alert-success alert-dismissible mt-2">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Item added to your cart</strong>
</div>';   
	}
    
    else{

    	echo'<div class="alert alert-danger alert-dismissible mt-2">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Item already added to your cart</strong>
</div>';

    }

}
  if(isset($_GET['cartItem']) && isset($_GET['cartItem'])=='cart_item'){

	$stmt=$conn->prepare("SELECT *  FROM cart");
	$stmt->execute();
	$stmt->store_result();
	$rows=$stmt->num_rows;
	echo $rows;
  
}
if(isset($_GET['remove'])){
  $id= $_GET['remove'];
  $stmt= $conn->prepare("DELETE FROM cart where id =?");
  $stmt->bind_param("i",$id);
  $stmt->execute();
  $_SESSION['showAlert']='block';
  $_SESSION['message']='Item remove from cart!';
  header('Location:cart.php');
}


if(isset($_GET['clear']))
{
  $stmt=$conn->prepare("DELETE FROM cart");
  $stmt->execute();
  $_SESSION['showAlert']='block';
  $_SESSION['message']='All Item remove from cart!';
  header('Location:cart.php');
  



}


if(isset($_POST['qtyy'])){
 $qtyy= $_POST['qtyy'];
  $pid= $_POST['pid'];
   $pprice= $_POST['pprice'];
  
 $tprice= $qtyy * $pprice;
 $stmt=$conn->prepare("UPDATE cart SET qtyy=?, total_price=? WHERE id=?");

 $stmt->bind_param("iss", $qtyy, $tprice, $pid);
 $stmt->execute();
 



}




?>