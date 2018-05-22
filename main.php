
<?php
session_start();
?>

<html>
    <table>
        <tr>
            <th>User Name</th>
            <th>Password</th>
        </tr>

 <?php

$con = mysqli_connect("localhost","root","","asfand");

$user=$_GET['username'];
$pass=$_GET['password'];

$query="SELECT  * FROM login WHERE username='$user' AND password='$pass' ";
$query1="SELECT * FROM user";


 if(isset($_SESSION["user"]))
{

    if($con)
    {
        $result=mysqli_query($con,$query);
        if($result)
        {
            while($row =mysqli_fetch_assoc($result))
            {
                $result=mysqli_query($con,$query1);
        if($result)
        {
            while($row =mysqli_fetch_assoc($result))
            {
                echo "<tr><td>{$row['username']}</td><td>{$row['password']}</td></tr>";
               
                    
            }
        }else{
            echo "Invalid credencials";
        }
               
                    
            }
        }
    }
    
    
}
else
{
    echo "Session Not set";
}
?>

    </table>
    </html>