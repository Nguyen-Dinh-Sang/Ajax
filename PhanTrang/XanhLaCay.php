<?php
	$soTinMotTrang = 5;
	
	$connect = mysqli_connect("localhost", "root", "", "cuahangdb");
	mysqli_query($connect, "SET NAMES 'utf8'");
	
	//require "KetNoi.php";
	$trang = $_GET["trang"];
	
	//chuyển biến trang về thành kiểu int
	settype ($trang, "int");
	
	$from = ($trang - 1) * $soTinMotTrang;
	$query = "SELECT * FROM sanpham
		ORDER BY MA ASC
		LIMIT $from, $soTinMotTrang
	";
	$tin = mysqli_query($connect, $query);
	while ($row = mysqli_fetch_array($tin)) {
		echo "<div class='motTin'>";
		echo $row["TEN_SANPHAM"]."-".$row["THUONGHIEU"];
		echo "</div>";
	}
	
?>