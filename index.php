<!-- <form action = "xuly.php" method = "get">
	<input name = "a" type = "text"/>
	<input name = "b" type = "text"/>
	<input type = "submit" value = "Gửi">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/khkJkR-ipfw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</form> -->

<script type = "text/javascript" src = "jquery-3.4.0.min.js" ></script>
<script>
	$(document).ready(function(){
		$("#tinh").click(function(){
			var soA = $("#txtA").val();
			var soB = $("#txtB").val();
			$.get("xuly.php", { a:soA, b:soB}, function(data){
				$("#ketqua").html(data);
			});
		});
	});
</script>

<input id = "txtA" name = "a" type = "text"/>
<input id = "txtB" name = "b" type = "text"/>
<input id = "tinh" type = "button" value = "Gửi">
<iframe width="560" height="315" src="https://www.youtube.com/embed/khkJkR-ipfw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div id = "ketqua">kết quả nằm ở đây</div>