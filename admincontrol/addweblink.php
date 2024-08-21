
<?php
$con = mysqli_connect("localhost", "root", "", "contenthub");
if (isset($_POST['submit'])) {
    $level = $_POST['level'];
    $base = $_POST['base'];
   $dpname = $_POST['department_name'];
   $url = $_POST['weblinkurl'];
   $title=$_POST['title'];
   
   $urls = filter_var($url, FILTER_SANITIZE_URL);
   $sql="insert into addweblink values('','$level','$base','$dpname','$url','$title')";
       $res=mysqli_query($con,$sql);
       if($res)
       {
           header('location:adminpanel.php');
       }
       else{
           echo "wrong";
       }
  
}
?>