<?php
include 'bootstarp.php';
 $con = mysqli_connect("localhost", "root", "", "contenthub");
if (isset($_POST['submit'])) {
    $level = $_POST['level'];
    $base = $_POST['base'];
    $dpname = $_POST['department_name'];
    $title = $_POST['title'];
    $filename = rand(0,99).$_FILES['myfile']['name'];
    $file = $_FILES['myfile']['tmp_name'];
    $destination = 'uploads/' . $filename;

    $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));


    $allowedExtensions = ['pdf', 'doc', 'docx', 'ppt', 'pptx'];


    if (in_array($fileExtension, $allowedExtensions)) {
        if (move_uploaded_file($file, $destination)) {

            $sql="insert into aadfiles values('','$level','$base','$dpname','$filename','$title')";
            $res=mysqli_query($con,$sql);
            if($res)
            {
                echo "<div class='alert alert-success'>File uploaded successfully!</div>";
                header('location:adminpanel.php');
            }
         
           //
          
        } else {
            echo "<div class='alert alert-danger'>There was an error uploading the file.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Invalid file type. Only PDF, Word, and PowerPoint files are allowed.</div>";
    }
}
?>
