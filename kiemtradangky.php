<?php
	$connect = mysqli_connect( "localhost", "root", "", "quanlysinhvien");
	
	$un = $_GET["un"];
	
	$query = "SELECT * FROM sinhvien WHERE user='$un' ";
	$u = mysqli_query($connect, $query);
	$dong = mysqli_num_rows($u);
	mysqli_close($connect);

?>