<?php
	mysql_connect(localhost,"root","");
	mysql_select_db("vape-corner") or die("Unable to select database");

	$firstname=$_POST['firstname'];
	$surname=$_POST['surname'];
	$E-mail Address=$_POST['E-mail address'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['password'];
	$query="select * from Register where firstname='$firstname' surname="$surname" e-mail="$E-mail address" and binary Password='$password'";

	$result=mysql_query($query);
	$num=mysql_num_rows($result);

	mysql_close();

	if($num==1)
	{
		$firstname = mysql_result($result,$i,"FirstName");
		
		session_start();
		
	$firstname=$_POST['firstname'];
	$surname=$_POST['surname'];
	$E-mail Address=$_POST['E-mail address'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['password'];
  
		header("location:resgister.check.php");
	}
	else
	{
		echo "<style>body, h1, h2 {font-family: Verdana, Arial, Helvetica, sans-serif;";
		echo "background-color:white;";
		echo "text-align:center;}";
		echo "</style>";
		echo "<h1>The Last Stop</h1>";
		echo "<h2>Customer Login</h2>";
		echo "Sorry you are unable to register.<br>";
		echo "You have succesfully register.";
		echo "<form><input type='button' value='OK' onclick='history.back();'></form>";
}
?>






