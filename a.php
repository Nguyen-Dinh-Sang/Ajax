<script type = "text/javascript" src = "jquery-3.4.0.min.js" ></script>
<script>
	$(document).ready(function(){
		//$("#noidung").load("b.php"); cách này load nguyên trang b.php vs ...
		//$.get("b.php", tham số truyền, hành động gì đó)
		//ho sẻ chạy file b.php truyền tham số ho và lấy dữ liệu về trang a.php qua biến data
		//$.get("b.php", {ho:"nguyễn đình sang"}, function(data){
		//	$("#noidung").html(data);
		//});
		$.post("b.php", {ho:"nguyễn đình sang"}, function(data){
			$("#noidung").html(data);
		});
	});
</script>
<?php
	echo "AAA"."</br>";
	//echo '<a href="b.php">go b</a>';
	echo '<div id = "noidung">...</div>';
?>