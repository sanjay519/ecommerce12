<?php
session_start();
include "confg.php";

if(!isset($_SESSION['username']))
{
  header("Location:index.php");  //If any user directly access this page using url of this page then it can't open untill there is any     session 
}

 else
 {
  $a=$_POST['bank'];
  if($a=="State Bank of India")
  {
	  
	  header("Location:https://www.onlinesbi.com");
	  
  }
  
   if($a=="Bank of Baroda")
  {
	  
	  header("Location:https://www.bankofbaroda.in");
	  
  }
  
  
  if($a=="Union Bank")
  {
	  
	  header("Location:https://www.unionbankofindia.co.in");
	  
  }
  
  
  
    if($a=="Punjab National Bank")
  {
	  
	  header("Location:https://www.pnbindia.in");
	  
  }
  
  
    if($a=="HDFC Bank")
  {
	  
	  header("Location:https://hdfcbank.com");
	  
  }
  
  
    if($a=="ICICI Bank")
  {
	  
	  header("Location:https://icicibank.com");
	  
  }
  
  
    if($a=="Axis Bank")
  {
	  
	  header("Location:https://axisbank.com");
	  
  }
 }
  
?>
