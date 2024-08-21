<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Links</title>
  
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: maroon;
            height: 50px;
        }
        .navbar h3 {
            color: white;
            margin: 0;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <?php include 'bootstrap.php'; ?>
    <?php
    $name = $_GET['department'];
    $con = mysqli_connect("localhost", "root", "", "contenthub");
    $sql = "SELECT * FROM adddepartment WHERE departmentname='$name'";
    $res = mysqli_query($con, $sql);
    foreach ($res as $r) {
    ?>
        <nav class="navbar">
            <div class="container-fluid">
                <h3><?php echo $r['departmentname']; ?> DEPARTMENT</h3>
            </div>
        </nav>
    <?php
    }
    ?>
    <div class="container-fluid mt-5">
        <div class="container">
            <table class="table table-striped table-bordered" id="example" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>TITLE</th>
                        <th>LINK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql2 = "SELECT * FROM addyoutube WHERE departmentname='$name'";
                    $show = mysqli_query($con, $sql2);
                    foreach ($show as $s) {
                    ?>
                        <tr>
                            <td><?php echo $s['title'] ?></td>
                            <td><a href="<?php echo $s['link'] ?>" class="youtube-link"><?php echo $s['link'] ?></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <center><a href="display.php?department=<?php echo $name ?>" class="btn btn-warning">BACK</a></center>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
         
            $('#example').DataTable();

        });
    </script>
</body>
</html>
