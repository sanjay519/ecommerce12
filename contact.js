
       function abc()
       {
             


            var a= document.getElementById("name").value;

           if(a== "")
       	      {
       	      	document.getElementById("error_name").innerHTML="**please enter your name";
       	      	return false;
       	      }

        
                    if(!isNaN(a))
		{
		  document.getElementById("error_name").innerHTML= "**please enter valid name.";
		  return false;
		}

		
		
		
		
		var b= document.getElementById("phone").value;
		
		    if(b== "")
       	      {
       	      	document.getElementById("error_phone").innerHTML="**please enter your mobile";
       	      	return false;
       	      }





              if(b.length<10 || b.length>13)
       	      {
       	      	document.getElementById("error_phone").innerHTML="**please enter valid mobile no.";
       	      	return false;
       	      }


		
		
           var c= document.getElementById("email").value;

             if(c== "")
       	      {
       	      	document.getElementById("error_email").innerHTML="**please enter your email";
       	      	return false;
       	      }




           var d= document.getElementById("message").value;

             if(d== "")
       	      {
       	      	document.getElementById("error_message").innerHTML="**please enter your Message";
       	      	return false;
       	      }
			  
			  
           else{
			   
			   alert("FeedBack Sent Successfully");
		   }

              

       }
 


