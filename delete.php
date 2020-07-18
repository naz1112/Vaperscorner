<?php
mysql_connect(localhost,"root","");
mysql_select_db("vape-corner") or die("Unable to select database");
$First Name = $_POST['First Name'];
$query = "delete from Products where firstname='$First Name';";
$result=mysql_query($query);
mysql_close();
?>
<html>
	<head>
		<title>
			vape-corner - Deleting Record
		</title>
		
		<style>
			body, p, h1, h2
			{
				font-family:Arial;
				background-color:White;
				text-align:center;
			}
		</style>
	</head>
	
	<body>
		<h1>vape-corner</h1>
		<h2>Deletion Successful</h2>
		<p><?php echo $First Name ?> has been removed!</p>
		
		<form>
		<input type="button" value="OK" onclick="history.go(-2);">
		</form>
	
	</body>
</html>


