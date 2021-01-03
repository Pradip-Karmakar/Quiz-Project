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

    <form class="frm" action="" method="post">

      <h1 class="card-header animated fadeInDownBig heading"><i class="fa fa-lock" aria-hidden="true"></i> Login </h1>

      <div class="card-block">
      <div class="animated slideInLeft">
        <input type="text" name="userid" placeholder="Enter Your Id" required/>
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
        <table class="table">
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>
          <tr>
            <td>abc</td>
            <td>abc</td>
          </tr>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
</body>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script type="text/javascript">
  particlesJS.load('particles-js', 'js/particle.json', function() {
    console.log('callback - particles.js config loaded');
  });
</script>

</html>
