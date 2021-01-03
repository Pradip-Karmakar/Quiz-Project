<?php
session_start();
	require 'include/db.php';
	if(!isset($_SESSION['id'])){
		header("location:login.php");
	}
	$passmark = 6;
	$ql = 0;
	$id = $_SESSION['id'];
	$fname = $_SESSION['fname'];
	$mname = $_SESSION['mname'];
	$lname = $_SESSION['lname'];
	$urname = $_SESSION['urname'];
	
	$sql = "select * from round1res";
	$res = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($res)){
		if($row['urname'] == $urname && $row['mark'] >= $passmark){
			$ql = 1;
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Qualified</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>

  <div class="container">

		<div class="row">
			<div class="col-md-6 offset-md-3" style="margin-top:25vh">
			
				<?php
				
					if($ql == 1){
						
						echo "<h1 class='text-center text-success'> Congratulation !</h1>";
						echo "<h3 class='text-center '> Your are Qualified For Next Round !</h3>";
						echo "<a href='index.php' style='margin-left:40%;' class='btn btn-primary btn-lg'>Home</a>";
						
					}else{
						echo "<h1 class='text-center text-danger'> Sorry !</h1>";
						echo "<h3 class='text-center '> Your are Not Qualified For Next Round !</h3>";
						$dq = "diq";
					$sql2 = "update user set st = 'diq' where id = '$id'";
					mysqli_query($con,$sql2);
				session_destroy();
					}
				
				?>
			
			</div>
		</div>
	</div>

	</body>
</html>