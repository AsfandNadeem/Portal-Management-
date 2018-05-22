<?php

session_start();
if(isset($_SESSION["user_id"])){
$loggedOnUser=$_SESSION["user_id"];

    if(isset($_GET["catinsert"]))
{
    $catname=$_GET["catinsert"];
    $con = mysqli_connect("localhost","root","","asfand");
   
    $query="INSERT INTO category(catName) VALUES ('$catname')";
   
    if($con){
    mysqli_query($con,$query);
    }

    unset($_GET["catinsert"]);
    header('Location: http://localhost/FA15-BCS-034-6A-LAssignment4/index.php');

}

if(isset($_GET["subcatinsert"]))
{
    $subcatname=$_GET["subcatinsert"];
    $catforsub=$_GET["incatsub"];
    $con = mysqli_connect("localhost","root","","asfand");
   
    $query="INSERT INTO subcategory(catId, subName ) VALUES ('$catforsub', '$subcatname')";
   
    if($con){
    mysqli_query($con,$query);
    }

    unset($_GET["subcatinsert"]);
    header('Location: http://localhost/FA15-BCS-034-6A-LAssignment4/index.php');

}
}
?>