
<?php
session_start();

echo "<html>";

if(isset($_POST["logout"]))
{
    unset($_POST["login"]);
    unset($_SESSION["user_id"]);
    unset($_POST["logout"]);
session_destroy();
header('Location: http://localhost/FA15-BCS-034-6A-LAssignment4/loginpage.php');
}
else if(isset($_POST["login"]))
{
    $con = mysqli_connect("localhost","root","","asfand");
    $query="SELECT * FROM users";
    if($con){
       $result= mysqli_query($con,$query);
       $user = $_POST["user"];
       $pass=$_POST["password"];
        if(mysqli_num_rows($result)>0)
        {          
            while($row=mysqli_fetch_assoc($result))
            {
                if(($user==$row["username"]))
                {
                    if(($pass==$row["password"]))
                    {
                    $_SESSION["user_id"]=$row["username"];
                    unset($_POST["user"]);
       
                    unset($_POST["password"]);
                    
                    header('Location: http://localhost/FA15-BCS-034-6A-LAssignment4/index.php');
                    }
                }
                else{                                       
                    echo "<script>
                    alert('User Not Found');
                    window.location.href='http://localhost/FA15-BCS-034-6A-LAssignment4/loginpage.php';
                    </script>";
                    header('Location: http://localhost/FA15-BCS-034-6A-LAssignment4/loginpage.php');
                }
            }
        }
      

    

}

else{
    echo"Unable to create a connection";
}
    
}

   
?>
</html>