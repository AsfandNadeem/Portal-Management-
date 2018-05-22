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
  
    <script type="text/javascript" src="JS/Jscript.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</head>
<body>
<div id="upperbar" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  ">

<div class="col-md-3">
<p class="navbar-brand mr-0" >Welcome <?php echo $loggedOnUser ;?></p>
<div class="navbar-header">
          <a class="navbar-brand" href="index.php">Home</a>
        </div>
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
<div class="container">
<form action="insertall.php" method="GET">
  <div class="form-group">
    <label >New Category</label>
    <input  name="catinsert" type="text" class="form-control" id="addcat" aria-describedby="emailHelp" placeholder="Enter Category">
    
  </div>
  
  

<?php
         $con = mysqli_connect("localhost","root","","asfand");
?>
<br/>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    
</body>
</html>