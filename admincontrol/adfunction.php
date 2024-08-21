<?php
                    $con = mysqli_connect("localhost", "root", "", "contenthub");
                    $success = false;
                    if (isset($_POST['submit'])) {
                        $level = $_POST['level'];
                        $base = $_POST['base'];
                        $dep_name = $_POST['department_name'];
                        $filename = $_FILES['dep_img']['name'];
                        $file = $_FILES['dep_img']['tmp_name'];
                        $sql = "INSERT INTO adddepartment VALUES('', '$level', '$base', '$dep_name', '$filename')";
                        $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                        
                        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

                        if (in_array($fileExtension, $allowedExtensions)) {
                            $target = 'depimg/' . $filename; 
                            
                            if (move_uploaded_file($file, $target)) {
                                $res = mysqli_query($con, $sql);
                                if ($res) {
                                  header('location:adminpanel.php');
                                }
                            } else {
                                echo "<div class='alert alert-danger'>There was an error uploading the file.</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger'>Please upload a valid image file (JPG, JPEG, PNG, GIF).</div>";
                        }
                    }
                    ?>