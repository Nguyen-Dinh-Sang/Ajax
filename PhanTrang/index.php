<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>phân trang</title>
		<script type = "text/javascript" src = "jquery-3.4.0.min.js" ></script>
		<script>
			var toanCuc = 0;
			$(document).ready(function(){
				$("#xemThem").click(function(){
					toanCuc ++;
					$.get("XanhLaCay.php", { trang:toanCuc }, function(data){
						$("#danhSach").append(data);
					});
				});
			});
		</script>
	</head>
	<body>
		<div id="danhSach"></div>
		<div id="xemThem">Xem Thêm</div>
	</body>
</html>