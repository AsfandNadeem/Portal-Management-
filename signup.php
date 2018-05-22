<html>
<?php
$user = $_POST["user"];
$email=$_POST["email"];
$pass=$_POST["password"];
$phone=$_POST["phone"];

if (!preg_match("/^[a-zA-Z]+$/",$user)) {
 echo "Only letters are allowed in username"; 
 echo "</br>";
 echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
}

else if(!preg_match("/^[_A-z0-9-]+((\.|\+)[_A-z0-9-]+)*@[A-z0-9-]+(\.[A-z0-9-]+)*(\.[A-z]{2,4})$/", $email))
{
    echo "invalid email";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
}
  else if(!preg_match("/^[a-zA-Z0-9]+$/",$pass)) {
    echo "Only letters and didgits are allowed in password"; 
    echo "</br>";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
   }
 else if(!preg_match("/^[0-9]+$/",$phone)) {
    echo "Only digits are allowed in phone"; 
    echo "</br>";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
   }

   else{

    $con = mysqli_connect("localhost","root","","asfand");
    $query="INSERT INTO users(username, password, email, phone) VALUES ('$user', '$pass', '$email', '$phone')";

    if($con){
        mysqli_query($con,$query);
        unset($_POST["user"]);
        unset($_POST["email"]);
        unset($_POST["password"]);
        unset($_POST["phone"]);
      
header('Location: http://localhost/FA15-BCS-034-6A-LAssignment4/loginpage.php');
        }

        else{
            echo"Unable to create a connection";
        }
    
      


   }
?>
</html>