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
//
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CS/Style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CS/Style.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
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

    <?php
     $con = mysqli_connect("localhost","root","","asfand");

     $query="SELECT  * FROM items WHERE subcatd = {$_GET["id"]}";
     
        if($con)
         {
             $result=mysqli_query($con,$query);

     
             if(mysqli_num_rows($result)>0)
             {
                 echo "<div class='row'>";
                 while($row=mysqli_fetch_assoc($result))
                 {
                    echo"<div class='col-md-4'>";
                    echo "<img class='img-responsive' src='Images\download.jpg' alt='Item Image' width='140' height='140'>";
                   echo "<h4>{$row["name"]}</h4>";
                    echo"<p>{$row["Price"]}</p>";
                   echo" <p><a class='btn btn-secondary' href='details.php?id={$row["itemId"]}' role='button'>View details »</a></p>";
                  
                  echo "</div>";
                  
                 }
                 echo "</div>";
             }
         }
        
    ?>
  
</body>
</html>