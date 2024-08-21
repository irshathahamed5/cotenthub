<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f7f7f7;
        }
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-header {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    session_start();


    $con = mysqli_connect("localhost", "root", "", "contenthub");


    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($con, $_POST['userid']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

      
        $sql1 = "SELECT * FROM admin WHERE name='$name'";
        $res = mysqli_query($con, $sql1);

        if (mysqli_num_rows($res) > 0) {
            $r = mysqli_fetch_assoc($res);
            if (password_verify($password, $r['password'])) {
                $_SESSION['id'] = $r['id'];
                header('Location: adminpanel.php');
                exit();
            } else {
                echo "<div class='alert alert-danger text-center'>Invalid User Name or Password</div>";
            }
        } else {
            echo "<div class='alert alert-danger text-center'>User not found</div>";
        }
    }
    ?>
    <div class="login-container">
        <h3 class="login-header">Admin Login</h3>
        <form method="post">
            <div class="form-group">
                <label for="userid">User ID</label>
                <input type="text" class="form-control" name="userid" id="userid" placeholder="Enter User ID" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
