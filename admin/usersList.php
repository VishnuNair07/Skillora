
<?php 
  include("classes/admin.php");
  $admin=new admin;
  $userd=$admin->show_users();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <!-- <link href="../online_quize/admin/bootstrap.min.css" rel="stylesheet"> -->
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin panel</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
         <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
 	

   .sidebar-list
   {
       margin-right: -15px;
       
       font-family: 'Quicksand', sans-serif; 
       font-size: 14px
   }

   .sidebar-list li:hover
   {
     background-color: deepskyblue !important;
   }
    .sidebar-list li a
    {
       color:white;
       text-decoration: none;
    }
    .card1
    {
      font-family: 'Open Sans', sans-serif;
    }
    .cardh2
    {
      font-family: 'Lato', sans-serif;

    }



    /***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

/***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

body {
   background-color: #f7f8f9;
}

.card {
   background-color: #ffffff;
   border: 1px solid rgba(0, 34, 51, 0.1);
   box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
   border-radius: 0.15rem;
}

/* Tabs Card */

.tab-card {
 border:1px solid #eee;
}

.tab-card-header {
 background:none;
}
/* Default mode */
.tab-card-header > .nav-tabs {
 border: none;
 margin: 0px;
}
.tab-card-header > .nav-tabs > li {
 margin-right: 2px;
}
.tab-card-header > .nav-tabs > li > a {
 border: 0;
 border-bottom:2px solid transparent;
 margin-right: 0;
 color: #737373;
 padding: 2px 15px;
}

.tab-card-header > .nav-tabs > li > a.show {
   border-bottom:2px solid #007bff;
   color: #007bff;
}
.tab-card-header > .nav-tabs > li > a:hover {
   color: #007bff;
}

.tab-card-header > .tab-content {
 padding-bottom: 0;
}
</style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="admin_main.php">Skillora</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="admin_main.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
   
  </div>
</nav>

<!-- Navbar End -->

<!-- Sidebar -->
<div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
            <li class="list-group-item  bg-dark "><a href="admin_main.php">Welcome Admin</a></li>
            <li class="list-group-item bg-dark "><a href="manage_courses/manage_courses.php">Manage Courses</a></li>
            <li class="list-group-item bg-dark"><a href="manage_quiz/manage_quiz.php">Manage Quize</a></li>
            <li class="list-group-item bg-dark"><a href="usersList.php">Manage Users</a></li>
            <li class="list-group-item bg-dark" style="height: 400px;"></li>
          </ul>
        </div>


        <!-- Sidebar End -->
<div class="col-md-8">    <!-- list of users starts -->

<table class="table ml-5 bg-white shodow pl-5 table-responsive" style=" height : 45rem; overflow-y: scroll;display: inline-block; width: 60rem;"> 
  
 <!-- table stsrts  -->  <!--  use table-responsive class -->
<h2 class="ml-5" style="margin-top : 30px">List of users</h2><br><br>
<thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Username</th>
    <th scope="col">Password</th>
    <th scope="col">email id</th>
  </tr>
</thead>
<tbody style="">

   <?php 
          foreach ($userd as $userdata) {
            
          
   ?> 
  <tr >
    <th scope="row"><?php echo $userdata['id']; ?></th>
    <td ><?php echo $userdata['username']; ?></td>
    <td><?php echo $userdata['password']; ?></td>
    <td><?php echo $userdata['email']; ?></td>
  </tr>
 
 <?php } ?>
</tbody>
</table>
</body>
</html>