<?php
	mysql_connect(localhost,"root","");
	mysql_select_db("vape-corner") or die("Unable to select database");

	$First Name = $_POST['First Name'];
	$Last Name = $_POST['Last Name'];
	
	$query = "INSERT INTO products VALUES ('$First Name','$Last Name')";
	
	mysql_query($query);
	mysql_close();

?>
<script>
	alert ("New Product Item has been successfully added.");
</script>
