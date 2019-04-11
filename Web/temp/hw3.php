<?php
	$server  = 'ideal.cs.nthu.edu.tw:1521';  
  	$database = 'cs4710';
  	$username = 'u902532';
  	$password = 'u571077';

  	$connection_string = 'DRIVER={Oracle}; SERVER=' . $server . ';DATABASE=' . $database;

  	$connection = odbc_connect($connection_string, $username, $password);


	if ($conn)
 		echo "success";
 
//	$sql="DROP TABLE CUSTOMER;"; 
	
//	$rs=odbc_exec($conn,$sql);
 
// 	$sql="Select TOTAL From count Where ID=1";
//	$rs=odbc_exec($conn,$sql);
	
?>
