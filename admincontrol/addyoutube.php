<?php
 $con = mysqli_connect("localhost", "root", "", "contenthub");
 if (isset($_POST['submit'])) {
     $level = $_POST['level'];
     $base = $_POST['base'];
    $dpname = $_POST['department_name'];
    $url = $_POST['youtube_url'];
    $title=$_POST['title'];
    
    $urls = filter_var($url, FILTER_SANITIZE_URL);
    $sql="insert into addyoutube values('','$level','$base','$dpname','$urls','$title')";
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
