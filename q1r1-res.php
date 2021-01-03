<?php
session_start();
	require 'include/db.php';
	if(!isset($_SESSION['id'])){
		header("location:login.php");
	}

	$que = $_POST['que'];
	$qid = $_POST['id'];
	$cnt = count($que);
	$nota = 0;
	$ra = 0;
	$wa = 0;
	$tm = 0;
	$mark = 0;
	$id = $_SESSION['id'];
	$fname = $_SESSION['fname'];
	$mname = $_SESSION['mname'];
	$lname = $_SESSION['lname'];
	$urname = $_SESSION['urname'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiz</title>
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
				if(isset($_SESSION['referror'])){
					echo "<h1 class='text-center'> Disqualified</h1>";
					echo "<p class='text-center'>".$_SESSION['referror']."</p>";
					$dq = "diq";
					$sql2 = "update user set st = 'diq' where id = '$id'";
					mysqli_query($con,$sql2);
				session_unset($_SESSION['referror']);
				session_destroy();
			}else{

			for ($i=0; $i < $cnt; $i++) {

				$sql = "SELECT * FROM round1q WHERE id = '$qid[$i]'";
				$res = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($res);

					if($que[$i] == 0){
							$nota++;
					}elseif($row['answer'] == $que[$i]){
							$ra++;
							$mark = $mark + 2;
					}else{
						$wa++;
					}
			}
			$an = $cnt - $nota;
			$tm = $_SESSION["ts"];
			$di = number_format(($tm/1000), 2, '.', '');
			?>



		<div class="card">
  		<div class="card-header card-primary">
    		<h1 class="text-center" style="color:white">Your Result</h1>
  		</div>
  		<div class="card-block">

				<table class="table">
		  		<tbody>
						<tr>
				      <th scope="row">Total Questions</th>
				      <td><?php echo $cnt; ?></td>
				    </tr>
				    <tr>
				      <th scope="row">Not Attempt Question</th>
				      <td><?php echo $nota; ?></td>
				    </tr>
				    <tr>
				      <th scope="row">Right Answers</th>
				      <td><?php echo $ra; ?></td>
				    </tr>
				    <tr>
				      <th scope="row">Wrong Answers</th>
				      <td><?php echo $wa; ?></td>
				    </tr>
				    <tr>
				      <th scope="row">Your Time to Take</th>
				      <td><?php echo $di; ?> seconds</td>
				    </tr>
		  	</tbody>
			</table>
			<a href="index.php" class="btn btn-primary btn-lg">Home</a>
	</div>
</div>

<?php
$sql = "insert into round1res(fname,mname,lname,urname,tot,nota,atq,ra,wa,mark,time) values('$fname','$mname','$lname','$urname','$cnt','$nota','$an','$ra','$wa','$mark','$di')";
mysqli_query($con,$sql);
}
?>
	</div>
		</div>

	</div>
	<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <p id="mtext"></p>
      <button type="button" class="btn btn-primary mdc">close</button>
    </div>

  </div>
	<script type="text/javascript">
	var modal = document.getElementById('myModal');
	if (performance.navigation.type == 1) {
  modal.style.display = "block";
  document.getElementById('mtext').innerHTML = "Not Refresh";
} else {
  console.info("This page is not reloaded");
}
	(function (global) {

	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}

		var _hash = "!";
		var noBackPlease = function () {
				global.location.href += "#";

		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
				global.setTimeout(function () {
						global.location.href += "!";
				}, 50);
		};

	// Earlier we had setInerval here....
		global.onhashchange = function () {
				if (global.location.hash !== _hash) {
						global.location.hash = _hash;
				}
		};

		global.onload = function () {

		noBackPlease();
		};

	})(window);
	</script>
</body>
</html>
