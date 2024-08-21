<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-RESOURCE</title>
    <style>
        .navbar{
            background-color: maroon;
            height:50px;
        }
        img{
            height: 100px;
            width: 200px;
            background-size: cover;
            border: 1px solid black;
            cursor: pointer;
        }
        a{
            color:maroon;
            text-decoration:none;
        }
        .logo{
            border: none;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
            text-align: center;
        }
        h2,h6{
            color:blue;
        }
    </style>
</head>
<body>
    <?php include 'bootstrap.php';?>
    <header>
    <center>
    <div class="containers">
        <div class="row">
            <div class="col-md-2 logo">
                <img class="logo" src="logo.jpeg" alt="logo">
            </div>
            <div class="col-md-8 text">
                <center>
                    <h2 style="color: blue;" class="head">SOURASHTRA COLLEGE (AUTONOMOUS)</h2>
                    <h6 style="color: blue;" class="one">(A Linguistic Minority Co-Educational Institution)</h6>
                    <h6 style="color: blue;" class="two">Affiliated to Madurai Kamaraj University</h6>
                    <h6 style="color: blue;" class="three">Re-accredited with 'B+' Grade by NAAC</h6>
                    <h6 style="color: blue;" class="four">Madurai-625004</h6>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    
                </center>
            </div>
        </div>
    </div>
    <nav class="navbar">
  <div class="container-fluid d-flex justify-content-end">
    <a style="color:white;" href="./admincontrol/adminlogin.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
      </svg>
    </a>
  </div>
</nav>

    </header> 
    </center> 

    <div class="container">
        <div class="row">
            <table>
                <h3>REGULAR</h3>
                <br>
               <center><h4>UG COURSE</h4></center> 
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "contenthub");
                    $sql = "SELECT * FROM adddepartment WHERE level='ug' AND base='regular'";
                    $res = mysqli_query($con, $sql);
                    $counter = 0; 

                    foreach($res as $r) {
                        if ($counter % 4 == 0) { 
                            echo "<tr>";
                        }
                        ?>
                        <td>
                            <a style="  color:maroon;text-decoration:none;" href="display.php?department=<?php echo $r['departmentname'] ?>">
                            <img  src="./admincontrol/depimg/<?php echo $r['img']; ?>" alt="">
                            <h6><?php echo $r['departmentname'] ?></h6></a>
                        </td>
                        <?php
                        $counter++; 

                        if ($counter % 4 == 0) { 
                            echo "</tr>";
                        }
                    }

                    if ($counter % 4 != 0) { 
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <table>
                <br>
               <center><h4>PG COURSE</h4></center> 
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "contenthub");
                    $sql = "SELECT * FROM adddepartment WHERE level='pg' AND base='regular'";
                    $res = mysqli_query($con, $sql);
                    $counter = 0; 

                    foreach($res as $r) {
                        if ($counter % 4 == 0) { 
                            echo "<tr>";
                        }
                        ?>
                        <td>
                        <a style="  color:maroon;text-decoration:none;" href="display.php?department=<?php echo $r['departmentname'] ?>">
                            <img  src="./admincontrol/depimg/<?php echo $r['img']; ?>" alt="">
                            <h6><?php echo $r['departmentname'] ?></h6>
                        </a>
                        </td>
                        <?php
                        $counter++; 

                        if ($counter % 4 == 0) { 
                            echo "</tr>";
                        }
                    }

                    if ($counter % 4 != 0) { 
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <table>
                <h3>SELF FINANCED</h3>
                <br>
               <center><h4>UG COURSE</h4></center> 
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "contenthub");
                    $sql = "SELECT * FROM adddepartment WHERE level='ug' AND base='self'";
                    $res = mysqli_query($con, $sql);
                    $counter = 0; 

                    foreach($res as $r) {
                        if ($counter % 4 == 0) { 
                            echo "<tr>";
                        }
                        ?>
                        <td>
                            <a style="  color:maroon;text-decoration:none;" href="display.php?department=<?php echo $r['departmentname'] ?>">
                            <img  src="./admincontrol/depimg/<?php echo $r['img']; ?>" alt="">
                            <h6><?php echo $r['departmentname'] ?></h6></a>
                        </td>
                        <?php
                        $counter++; 

                        if ($counter % 4 == 0) { 
                            echo "</tr>";
                        }
                    }

                    if ($counter % 4 != 0) { 
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <table>
                <br>
               <center><h4>PG COURSE</h4></center> 
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "contenthub");
                    $sql = "SELECT * FROM adddepartment WHERE level='pg' AND base='self'";
                    $res = mysqli_query($con, $sql);
                    $counter = 0; 

                    foreach($res as $r) {
                        if ($counter % 4 == 0) { 
                            echo "<tr>";
                        }
                        ?>
                        <td>
                        <a style="  color:maroon;text-decoration:none;" href="display.php?department=<?php echo $r['departmentname'] ?>">
                            <img  src="./admincontrol/depimg/<?php echo $r['img']; ?>" alt="">
                            <h6><?php echo $r['departmentname'] ?></h6>
                        </a>
                        </td>
                        <?php
                        $counter++; 

                        if ($counter % 4 == 0) { 
                            echo "</tr>";
                        }
                    }

                    if ($counter % 4 != 0) { 
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
