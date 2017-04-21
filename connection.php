<?php
	if($con= mysqli_connect("localhost","root","","dbfaculty")){
		
	}else{
		die("unable to connect because".mysql_error());
	}
	mysqli_select_db($con, "dbfaculty");
?>