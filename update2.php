<?php
mysql_connect(localhost,"root","");
mysql_select_db("vape-corner") or die("Unable to select database");
$First Name = $_POST['First Name'];
$Last Name =$_POST['Last Name'];
$query = "update products set product_id = product_id-$product_id where First Name ='$First Name';";
$query = "update products set product_id = product_id-$product_id where Last Name ='$Last Name';";
$result=mysql_query($query);
mysql_close();
?>
<html>
<head>
<title>
The Last Stop - Purchase Stock
</title>
<style>
body, p, h1, h
{
font-family:Arial;
background-color:White;
text-align:center;
}
</style>
</head>
<body>
<h1>The Last Stop</h1>
<?php
echo "<h3>$product_id x $First Name updated Products page </h3>";
?>
<form>
<input type="button" value="update record" onclick="history.go(-2);">
</form>
</body>
</html>


