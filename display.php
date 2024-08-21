<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        .navbar{
            background-color: maroon;
            height: 50px;
        }
     
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }

        .content-container {
            width: 100%;
            max-width: 800px; /* Set a max-width for the content */
            padding: 20px;
            margin: auto;
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        .bi {
            color: black;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            margin-bottom: 50px;
            text-align: center;
        }

        .row:nth-child(odd) {
            background-color: #f0f0f0;
        }

        .row:nth-child(even) {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <?php include 'bootstrap.php';?>
    <?php
    $name = $_GET['department'];
    $con = mysqli_connect("localhost", "root", "", "contenthub");
    $sql = "SELECT * FROM adddepartment WHERE departmentname='$name'";
    $res = mysqli_query($con, $sql);
    foreach ($res as $r) {
    ?>
        <nav class="navbar">
            <div class="container-fluid">
                <h3 style="color: white;"><?php echo $r['departmentname']; ?> DEPARTMENT</h3>
            </div>
        </nav>
    <?php
    }
    ?>

    <div class="center-container">
        <div class="content-container">
            <div class="row">
                <div class="col-md-12 mb-4 mt-5">
                    <a href="filedisplay.php?department=<?php echo $name; ?>" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center justify-content-center p-4 border rounded shadow-sm">
                            <i class="bx bx-file mr-3" style="font-size: 2.5rem;"></i>
                            <h2 class="mb-0">Study Materials Files</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-12 mb-4">
                    <a href="youtubedisplay.php?department=<?php echo $name; ?>" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center justify-content-center p-4 border rounded shadow-sm">
                            <i class="bx bxl-youtube mr-3" style="font-size: 2.5rem;"></i>
                            <h2 class="mb-0">YouTube Video References</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-12 mb-5">
                    <a href="weblinkdisplay.php?department=<?php echo $name; ?>" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center justify-content-center p-4 border rounded shadow-sm">
                            <i class="bx bx-link-external mr-3" style="font-size: 2.5rem;"></i>
                            <h2 class="mb-0">Web Links</h2>
                        </div>
                    </a>
                </div>
            </div>
            <center><a href="index.php" class="btn btn-warning">BACK</a></center>
        </div>
    </div>
</body>
</html>
