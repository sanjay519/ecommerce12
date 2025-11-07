<?php

include 'confg.php';
                        
 
                        

                            
                            $a=$_POST['name'];   //argument that is passed in $_POST is a name that is given to tha HTML element
				          	$b=$_POST['phone'];    //$a, $b are the varibles 
						
							
							$c=$_POST['email'];
							$d=$_POST['message'];
							
						  
$query= "INSERT INTO contact(name,phone,email,message) values  
('$a','$b','$c','$d' )";   // insert into table_name(column1 , column2 , column3 , ...) values( varible1, varible2 varible3,..    );


// column1, column2 , ... are the columns name that are present in the table of given database
mysqli_query($conn,$query);

header("Location:index.php");	
		
	






?>
