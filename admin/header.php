<?php

session_start();
if(!isset($_SESSION['id'])){
  header("location:login.php");
}
if ($_SESSION['id'] != 1) {
  header("location:../login.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">
  <meta name="author" content="">
  <title> Admin Panel</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/adduser.css" rel="stylesheet">
</head>

<body class="fixed-nav" id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">BCA - Admin Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav">
        <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti">
              <i class="fa fa-fw fa-sitemap"></i>
              <span class="nav-link-text">
                Quiz</span>
            </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti1">Quiz 1</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti1">

                <li>
                  <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti12">Round 2</a>
                  <ul class="sidenav-third-level collapse" id="collapseMulti12">
                    <li>
                      <a href="r2que.php">Add Questions</a>
                    </li>
                    <li>
                      <a href="round2r.php">Get Result</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti13">Round 3</a>
                  <ul class="sidenav-third-level collapse" id="collapseMulti13">
                    <li>
                      <a href="r3que.php">Add Questions</a>
                    </li>
                    <li>
                      <a href="round3r.php">Get Result</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="adduser.php">
              <i class="fa fa-fw fa-plus"></i>
              <span class="nav-link-text">
                Add Users</span>
            </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-fa-plustoggle="modal" data-target="#exampleModal" href="../logout.php">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
        </li>
      </ul>
    </div>
  </nav>
