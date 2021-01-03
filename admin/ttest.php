
<?php
	require '../include/db.php';
	for($i=1;$i<=60;$i++)
	{
		$val = "a".$i;
	$sql = "insert into user(fname,mname,lname,urname,pass,st) values('$val','$val','$val','$val','$val','')";
	mysqli_query($con,$sql);
	}
?>