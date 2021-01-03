<?php

include 'header.php';
require '../include/db.php';
 ?>
 <div class="content-wrapper py-3">

   <div class="container-fluid">

 <div class="card mb-3" id="std">
   <div class="card-header">
     <i class="fa fa-table"></i>Round 2 Result
   </div>

   <div class="card-body">
     <div class="mx-2">

        <form method="post" id="lol">

          <div class="form-group">
            <input type="text" name="mark" placeholder="Enter Passing Mark" required/>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Result" class="btn btn-success bb">
          </div>
        </form>

     </div>
	 <?php

     if (!isset($_POST['submit'])) {


       $sql = "select * from round1res";
       $res = mysqli_query($con,$sql);
      ?>
     <div class="table-responsive">
       <table class="table table-bordered">
         <thead>
           <tr>
             <th>Name</th>
             <th>ID</th>
             <th>Attempts</th>
             <th>Answer Right</th>
             <th>Answer Wrong</th>
             <th>mark</th>
             <th>Time</th>
           </tr>
         </thead>
         <tbody>
           <?php
            while($row = mysqli_fetch_array($res)){
            ?>
           <tr>
             <td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
             <td><?php echo $row['urname']; ?></td>
             <td><?php echo $row['atq']; ?></td>
             <td><?php echo $row['ra']; ?></td>
             <td><?php echo $row['wa']; ?></td>
             <td><?php echo $row['mark']; ?></td>
             <td><?php echo $row['time']; ?></td>
           </tr>
         <?php } ?>
         </tbody>
       </table>
     </div>
	 <?php } ?>
     <?php

     if (isset($_POST['submit'])) {

       $mr = $_POST['mark'];
       $_SESSION['pma'] = $_POST['mark'];

       $sql = "select * from round1res where mark >= '$mr'";
       $res = mysqli_query($con,$sql);
      ?>
     <div class="table-responsive">
       <table class="table table-bordered">
         <thead>
           <tr>
             <th>Name</th>
             <th>ID</th>
             <th>Attempts</th>
             <th>Answer Right</th>
             <th>Answer Wrong</th>
             <th>mark</th>
             <th>Time</th>
           </tr>
         </thead>
         <tbody>
           <?php
            while($row = mysqli_fetch_array($res)){
            ?>
           <tr>
             <td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
             <td><?php echo $row['urname']; ?></td>
             <td><?php echo $row['atq']; ?></td>
             <td><?php echo $row['ra']; ?></td>
             <td><?php echo $row['wa']; ?></td>
             <td><?php echo $row['mark']; ?></td>
             <td><?php echo $row['time']; ?></td>
           </tr>
         <?php } ?>
         </tbody>
       </table>
     </div>
     <a href="r2respdf.php" class="btn btn-success bb">RESULT IN PDF</a>
   <?php } ?>

   </div>
   <div class="card-footer small text-muted">
    Admin - Panel
   </div>
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
