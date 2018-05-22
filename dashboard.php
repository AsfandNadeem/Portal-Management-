<?php
session_start();
if(isset($_SESSION["user_id"])){
$loggedOnUser=$_SESSION["user_id"];
}
else  {
  echo "<script>
  alert('Log-In First');
  window.location.href='http://localhost/FA15-BCS-034-6A-LAssignment4/loginpage.php';
  </script>";
  header('Location: http://localhost/FA15-BCS-034-6A-LAssignment4/loginpage.php');
}
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" type="text/css" href="CS/Style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>


<div id="upperbar" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  ">

            <div class="col-md-3">
            <p class="navbar-brand mr-0" >Welcome <?php echo $loggedOnUser ;?></p>
            </div>
            <div class="col-md-7"></div>
            <div class="col-md-2">
            <form class="form-signin" action='login.php' method='POST'>
            <button class="btn btn-lg btn-primary " name="logout" type="submit">Sign-Out</button>
            </form>
            <!-- <a class="nav-link active" href="login.php?">
                  Sign-Out
                </a> -->
                </div>

            
          </div>
<div class="container-fluid">
        <div class="row">
         <div class="col-md-2 ">
          

          <div class="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                      Home
                    </a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" href="insert.php?id=Insert">
                  Insert
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="deletecat.php?id=Delete">
                    Delete
                  </a>
                </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  Update
                </a>
              </li>
             
            </ul>
          </div>
          </div>  

          <div class="col-md-6">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <!-- <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1" class=""></li>
               <li data-target="#myCarousel" data-slide-to="2" class=""></li>
             </ol> -->
             <div class="carousel-inner">
               <div class="carousel-item active">
                 <img class="first-slide" src="Images\download.jpg" alt="First slide">
                 <div class="container">
                   <!-- <div class="carousel-caption text-left">
                     <h1>Example headline.</h1>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                     <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                   </div> -->
                 </div>
               </div>
               <div class="carousel-item">
                 <img class="second-slide" src="Images\bus.jpg" alt="Second slide">
                 <div class="container">
                   <!-- <div class="carousel-caption">
                     <h1>Another example headline.</h1>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                     <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                   </div> -->
                 </div>
               </div>
               <div class="carousel-item">
                 <img class="third-slide" src="Images\airp.jpg" alt="Third slide">
                 <div class="container">
                   <!-- <div class="carousel-caption text-right">
                     <h1>One more for good measure.</h1>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                     <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                   </div> -->
                 </div>
               </div>
             </div>
            
           </div>
           </div>
         
          </div>
        </div>
</body>
</html>