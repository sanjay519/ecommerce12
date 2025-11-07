<?php

session_start();
include 'confg.php';
if(!isset($_SESSION['admin']))
{	
echo '<script> alert("Login Your Acccount First");
							             window.location="admin.php";
							             </script>';
}
$abc=$_SESSION['admin'];                        
 
                        

                       if(isset($_POST['submit'])){     
                            $a=$_POST['oldpassword'];   //argument that is passed in $_POST is a name that is given to tha HTML element
				          	$b=$_POST['newpassword'];    //$a, $b are the varibles 
							$c=$_POST['conpassword'];
							
							
                        
$query= "SELECT password FROM admin WHERE username='$abc'";   // insert into table_name(column1 , column2 , column3 , ...) values( varible1, varible2 varible3,..    );
 

// column1, column2 , ... are the columns name that are present in the table of given database
$result=mysqli_query($conn,$query);

	


while($row=mysqli_fetch_array($result))
{	
   $pass=$row['password'];	
	if($pass==$a)
	{
         if($b==$c)
		 {
		$query1="UPDATE admin SET password='$b' , conpassword='$c' where username='$abc'";
		$result1=mysqli_query($conn,$query1);
		           if($result1)
				   {
		             echo '<script> alert("Passsword Changed Successfully");
							             window.location="admin.php";
							             </script>';
				   }
                    else{
                    
					  echo '<script> alert("Failed");
							             window.location="admin.php";
							             </script>';
					}						
               		
		 }
          else
		  {
            echo '<script> alert("New Password and Confirm Password Not Match");
							             window.location="admin.php";
							             </script>';
		  }	  
			 
    }
    else

	{
 echo '<script> alert("Invalid Old Password");
							             window.location="admin.php";
							             </script>';

	}	
	

}

					   }
	 echo '<script> alert("Authentication Required");
							             window.location="admin.php";
							             </script>';				
					   
					   
?>





