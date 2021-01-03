<?php

    include 'header.php';

    require '../include/db.php';

    if (isset($_POST['submit'])) {
      $que = mysqli_real_escape_string($con,$_POST['que']);
      $o1= mysqli_real_escape_string($con,$_POST['o1']);
      $o2= mysqli_real_escape_string($con,$_POST['o2']);
      $o3= mysqli_real_escape_string($con,$_POST['o3']);
      $o4= mysqli_real_escape_string($con,$_POST['o4']);
      $ra = mysqli_real_escape_string($con,$_POST['ra']);

        $sql = "insert into round2q(question,option1,option2,option3,option4,answer) values('$que','$o1','$o2','$o3','$o4','$ra')";

        if (mysqli_query($con,$sql)) {
          $sucmsg = "Question Add Successfull";
        }

    }

 ?>

 <div class="content-wrapper py-3">

   <div class="container-fluid">

     <div class="card mb-3">

       <form method="post" id="lol">

         <div class="card-header"><i class="fa fa-plus" aria-hidden="true"></i> Round 3 Add Question </div>

         <div class="card-body">

           <div class="mx-4">

               <?php
               if (isset($sucmsg)) {
                 echo "<h3 class='text-center'> $sucmsg </h3>";
               }

                ?>

           </div>
           <div class="form-group">
             <input type="text" name="que" placeholder="Enter Question" required/>
           </div>
           <div class="form-group">
             <input type="text" name="o1" placeholder="Enter Option 1" required/>
           </div>
           <div class="form-group">
             <input type="text" name="o2" placeholder="Enter Option 2" required/>
           </div>
           <div class="form-group">
             <input type="text" name="o3" placeholder="Enter Option 3" required/>
           </div>
           <div class="form-group">
             <input type="text" name="o4" placeholder="Enter Option 4" required/>
           </div>
           <div class="form-group">
             <input type="text" name="ra" placeholder="Enter Right answer" required/>
           </div>
           <div class="form-group">
             <input type="submit" name="submit" value="Add" class="btn btn-success bb">
           </div>
         </div>
         <div class="card-footer small text-muted">
             Admin - Panel
         </div>
       </form>

   </div>
   </div>

</div>
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
      Select "Logout" below if you are ready to end your current session.
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      <a class="btn btn-primary" href="login.html">Logout</a>
    </div>
  </div>
</div>
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>


<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>


<script src="js/sb-admin.min.js"></script>

</body>

</html>
