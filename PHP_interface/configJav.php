
<?php
	$con = mysqli_connect('localhost','root','');
	$db = mysqli_select_db($con, 'java');
	
	if( !$con || !$db )
	{
		echo "<pre>";
		echo mysql_error();
		echo "</pre>";
	}
?>
