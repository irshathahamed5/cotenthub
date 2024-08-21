<?php
include 'bootstarp.php';
 $con = mysqli_connect("localhost", "root", "", "contenthub");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $password=password_hash($pass,PASSWORD_DEFAULT);
    $sql="insert into admin values('','$name','$password','$email')";
    $res=mysqli_query($con,$sql);
    if($res)
    {
        header('location:adminpanel.php');
    }
    else{
        echo "<div class='alert alert-danger'>ERROR.</div>";
    }
}
?>