<?php

session_start();
if(isset($_SESSION["user_id"]))
{
$loggedOnUser=$_SESSION["user_id"];

if(isset($_GET["iddelete"])){
    $subcatname=$_GET["iddelete"];
    $catname=$_GET["catdelete"];
      $con = mysqli_connect("localhost","root","","asfand");    
    $query1="DELETE FROM items WHERE items . subcatd = '$subcatname'";
    $query2="DELETE FROM subcategory WHERE subcategory . subID='$subcatname'";   
    $query3="DELETE FROM category WHERE category . catId = '$catname'";
   //"DELETE FROM `items` WHERE `items`.`itemId` = 5"
   //Delete foreign keys first only then can you delete the primary key
    
    if($con){
 //   mysqli_query($con,$query);
 mysqli_query($con,$query1);
    mysqli_query($con,$query2);
    mysqli_query($con,$query3);
}
unset($_GET["iddelete"]);
unset($_GET["catdelete"]);
}
header('Location: http://localhost/FA15-BCS-034-6A-LAssignment4/index.php');
}


?>