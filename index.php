<?php

  session_start();
  if(!isset($_SESSION['id'])){
    header("location:login.php");
  }
  if($_SESSION['sta'] == 'diq'){
	  die("You are Disqualified");
  }

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
    <div class="back">

      <img src="img/4.jpg" class="bgimg" type="jpg/jpeg">

    </div>

    <div class="container-fluid text-center">
      <div class="row1">
        <div class="col-md-12">
          <p class="text-right heading"><a class="btn btn-danger" href="logout.php">Logout</a></p>
          <h1 class="heading">
            QUIZ
          </h1>

        </div>
      </div>
      <div class="row" style="margin-top:15vh">

        <div class="col animated slideInLeft">
          <a class="btn btn-primary tbtn" href="q1r1-test.php"><h1 class="q"><i class="fa fa-question-circle" aria-hidden="true"></i> Round 2</h1></a>
        </div>
        <div class="col animated slideInRight">
          <a class="btn btn-danger tbtn" href="q1r2-test.php"><h1 class="q"><i class="fa fa-question-circle" aria-hidden="true"></i> Round 3</h1></a>
        </div>	
      </div>
	  <div class="q3"> 
	  <a class="btn btn-success q3btn" href="quali.php">Qualified Candidates for Round 3</a>
	  </div>
	</div>
	
    <div class="container-fluid text-center">
      <div class="col-sm-12">
        <h3 class="present">Presented by : TYBCA</h3>
        <p class="text-muted">Explore </p>
      </div>
    </div>

    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
