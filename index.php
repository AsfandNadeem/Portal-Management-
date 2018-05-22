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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./CS/Style.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div id="upperbar" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  ">

<div class="col-md-3">
<p class="navbar-brand mr-0" >Welcome <?php echo $loggedOnUser ;?></p>
<div class="navbar-header">
          <a class="navbar-brand" href="dashboard.php">Manage</a>
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

<div class="row">
 <div class="col-md-2 ">
  <div class="sidebar">
   <ul class="nav flex-column">

<?php
    $con = mysqli_connect("localhost","root","","asfand");

$query="SELECT  * FROM category";


if($con)
{
    
    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result)>0)
    {
        
       
        while($row=mysqli_fetch_assoc($result))
        {
            echo"<div class='dropdown show'>";
            
           echo"<a class='btn-secondary dropdown-toggle' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
           {$row["catName"]}
         </a> <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>";
         $query2="SELECT  * FROM subcategory WHERE catId = {$row["catId"]}";
         $result2=mysqli_query($con,$query2);

        
    if(mysqli_num_rows($result2)>0)
    {
        while($row1=mysqli_fetch_assoc($result2))
        {
             echo"<a class='dropdown-item' href='items.php?id={$row1["subID"]}'>{$row1['subName']}</a>";
                
        }
    }

     echo"</div> </div>";
      
           
        }
        
       
        
    }
}

?>
 </ul>
    </ul>
     </div>
          </div>  

          <div class="col-md-2">
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
 
</body>
</html>