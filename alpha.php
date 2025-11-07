<?php 
	
session_start();
	include"confg.php";

	
			if (isset($_POST['login']))
            {

					$username=$_POST['username'];//$x is a varible, $_POST[is input given by user/name of the input type]
					$password=$_POST['password'];
					
					 
						
						     if($username=="admin34@gmail.com" && $password=="admin@7351")
							{
               
							$_SESSION['username']= $username;
							$_SESSION['admin']= $username; //inbuilt in php, used to create session for the variable which will last until browser is closed, it can                              be accessed in all the opened related pages.
							header('location:admin.php');
                            }

                        else
                        {
						     $query= " select * from signup WHERE username='$username' AND password='$password'";//username is a field in database
						
						      $query_run = mysqli_query($conn,$query);
						
						              if(mysqli_num_rows($query_run)>0)
						                {
							            //valid
							
							             $_SESSION['username']= $username; //inbuilt in php, used to create session for the variable which will last until browser is                                          closed, it can be accessed in all the opened related pages.
			
							            header('location:index.php');
						                 }
						               else
						                 {
							
							              //invalid
							             echo '<script> alert("Invalid! Email ID and Password");
							             window.location="signin.php";
							             </script>'; 
						
			    		                }		
							
			             }	
					
		}				
			
			?>