<script type = "text/javascript" src = "jquery-3.4.0.min.js" ></script>
<script>
	$(document).ready(function(){
		$("#txtUsername").blur(function(){
			var user = $(this).val();
			$.get("kiemtradangky.php", { un:user}, function(data){
				//alert(data);
				if(data==0) {
					$("#nhacLoi").html("hợp lệ");
					$("#nhacLoi").css("color", "blue");
				} else {
					$("#nhacLoi").html("không hợp lệ");
					$("#nhacLoi").css("color", "red");
				}
			});
		});
	});
</script>
<form action="" method="post" >
	<table width="400" border="0" cellspacing="0">
		<tr>
			<td>Username</td>
			<td>
				<label for="txtUsername"></label>
				<input type="text" name="txtUsername" id="txtUsername"/>
				<div id="nhacLoi"></div>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<label for="txtPassword"></label>
				<input type="text" name="txtPassword" id="txtPassword"/>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnDangKy" id="btnDangKy" value="Đăng ký"/>
			</td>
		</tr>
	</table>
</form>