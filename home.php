<!doctype html>
<html>
<head>
	<title>Ajax Home</title>
	<script type="text/javascript" language="javascript" src="jquery-3.4.1.min.js"></script>
</head>
<body>
<style>
	#container{
		border-style:solid;
	}
</style>
<script type="text/javascript">
$(function(){

	$("#click").click(function(){
		var name=$("#txtName").val();
		$.get("home_code.php",{txtName:name},function(data)
		{
			$("#container").html(data);
		});
	});

});
</script>
	<form method="GET" action="home_code.php">
		<input type="text" id="txtName" name="txtName" />

		<input type="button" id="click" value="Show Ajax">
	

<div id="container">
</div>
</form>
</body>
</html>