<?php
session_start();
include 'confg.php';

$_SESSION['start']= time();
$_SESSION['expire']= $_SESSION['start'] + (5 * 60 );                      
 
                           
                            $u=uniqid();
                            $delidate="Not Delivered ";
                            $a=$_POST['name'];   //argument that is passed in $_POST is a name that is given to tha HTML element
				          	   //$a, $b are the varibles 
							$c=$_POST['phone'];
							
							$d=$_POST['date'];
							$e=$_POST['address'];
							
						    $f=$_POST['product'];
                            $g=$_POST['rupee'];
						    $h=$_POST['pay'];
                            $i=$_POST['status'];
                        

 $_SESSION['deli']=$delidate;
 $_SESSION['unique']=$u;
 $_SESSION['phone']=$c;
 $_SESSION['date']=$d;
 $_SESSION['address']=$e;

 



if($h=="Cash on Delivery")
	
	{
	$query= "INSERT INTO delivery(transaction,name,phone,date,delivery,product,rupee,mode,status,delivered) values  
     ('$u','$a','$c','$d','$e','$f','$g', '$h', '$i', '{$_SESSION['deli']}' )";   // insert into table_name(column1 , column2 , column3 , ...) values( varible1, varible2 varible3,..    );

   

    //column1, column2 , ... are the columns name that are present in the table of given database
    mysqli_query($conn,$query);

	
	
	echo '<script> alert("Order Successfully Placed !!");
	window.location="thank.php"</script>'; 	
		
	}	

if($h=="Credit/Debit Cards" || $h =="Net Banking")
	
	{
	
	header("location:payment.php");	
		
	}






?>
