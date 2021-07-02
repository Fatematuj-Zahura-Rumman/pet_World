<?php 

	  session_start();
	  $conn=mysqli_connect("localhost","root","","bdpetworld");
	  if(!$conn)
	    die("Connection Failed".mysqli_connect_error());

?>