<?php
  session_start();
    require 'include/db.php';

    if(isset($_SESSION['id'])){
      session_destroy();
    }

    if (isset($_POST['submit'])) {

        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        $rowcnt=0;
        $sql = "SELECT * FROM user WHERE urname = '$uname'";
        $res = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($res)) {
          if ($row['pass'] == $pwd) {
            $rowcnt = 1;
            if($uname == 'admin'){
                header("location: admin/index.php");
                $_SESSION['id'] = $row['id'];
                break;
              }else{
                $_SESSION['id'] = $row['id'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['mname'] = $row['mname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['urname'] = $row['urname'];
				$_SESSION['sta'] = $row['st'];
                header("location: index.php");
                break;
              }
          }
        }
        if ($rowcnt == 0) {
            $errormsg = "Error In Login";
        }



    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/sstyle.css"/>
  <link rel="stylesheet" href="css/animate.css"/>
  <link rel="stylesheet" href="fontm/font-mfizz.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css">

  


</head>

<body >
  <div id="particles-js">

</div>
<div class="col-md-12 text-center head">
  <h1>
    BCA QUIZ COMPETITION
  </h1>
</div>

<div class="container" id="block">

  <div class="card">

    <form class="frm" method="post">

      <h1 class="card-header animated fadeInDownBig heading"><i class="fa fa-lock" aria-hidden="true"></i> Login </h1>

      <div class="card-block">
        <div class="text-center mx-5">
            <?php
                if(isset($errormsg)){
                  echo "<p style='color:red;'>$errormsg</p>";
                  unset($errormsg);
                }
             ?>
        </div>
      <div class="animated slideInLeft">
        <input type="text" name="uname" placeholder="Enter Your Id" required/>
      </div>
      <div class="animated slideInRight">
        <input type="password" name="pwd" placeholder="Password" required/>
      </div>
      <div class="animated slideInUp">
        <input type="submit" name="submit" value="Submit">
      </div>
      </div>
    </form>
  </div>
  <div class="row mt-5">
    <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
      View Your ID
    </button>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ID LIST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="table_id" class="table">
          <thead>
		  <tr>
            <td><h3><b>Name</b></h3></td>
            <td><h3><b>ID</b></h3></td>
          </tr>
		  </thead>
		   <tbody>
          <?php

            $sql1 = "SELECT * FROM user WHERE id != (SELECT MIN(id) FROM user)";
            $res = mysqli_query($con,$sql1);
            while ($row = mysqli_fetch_array($res)) {
           ?>
		  
          <tr>
            <td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
            <td><?php echo $row['urname']; ?></td>
          </tr>
        <?php } ?>
			 </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>

<script type="text/javascript">
  particlesJS.load('particles-js', 'js/particle.json', function() {
    console.log('callback - particles.js config loaded');
  });
  
</script>
</body>


</html>
