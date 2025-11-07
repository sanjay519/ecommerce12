<?php
		 
		 if(isset($_POST['sub']))
		 {
			 include "confg.php";
			 $pro_id= $_POST['ppid'];
            $q= "select password from  signup where username='$pro_id'";
            $fire= mysqli_query($conn,$q);
 
 if(mysqli_num_rows($fire)>0)
 {
 
while($row=mysqli_fetch_array($fire))
 {
	 
	 
	$b=$row['password'];
	
	
	echo '<script> alert("Your New Password is '.$b.'");
	window.location="forgett.php"</script>'; 
	
}
	
 }
 
 else
	 
	 {
		
	echo '<script> alert("Invalid Email ID");
	window.location="forgett.php"</script>'; 
		 
		 
	 }
		 
		

		 }


 ?>	 
	
	
    
		 