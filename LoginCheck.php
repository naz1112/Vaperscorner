<?php
	mysql_connect(localhost,"root","");
	mysql_select_db("vape-corner") or die("Unable to select database");

	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from Users where Username='$username' and binary Password='$password'";

	$result=mysql_query($query);
	$num=mysql_num_rows($result);

	mysql_close();

	if($num==1)
	{
		$firstname = mysql_result($result,$i,"FirstName");
		
		session_start();
		
		$_SESSION["firstname"] =$firstname;
		$_SESSION["username"] =$username;
		$_SESSION["password"] =$password;
  
		header("location:LoginWelcome.php");
	}
	else
	{
		echo "<style>body, h1, h2 {font-family:Arial";
		echo "background-color:white;";
		echo "text-align:center;}";
		echo "</style>";
		echo "<h1>vape-corner</h1>";
		echo "<h2>Customer Login</h2>";
		echo "Sorry, we could not log you in.<br>";
		echo "Please try again.";
		echo "<form><input type='button' value='OK' onclick='history.back();'></form>";
}
?>






