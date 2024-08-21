
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location:../index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        .navbar {
            background-color: maroon;
        }
        .header {
            color: white;
            margin: 0;
        }
        .clickable-div {
            background-color: #f0f0f0;
            padding: 10px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
        }
        .form-container, .content-container, .content-form {
            display: none;
            margin-top: 20px;
        }
        .content-section {
            background-color: #e0e0e0;
            padding: 10px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .success-message {
            display: none;
            margin-top: 20px;
            color: green;
            font-weight: bold;
        }
    </style>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Bootstrap PHP inclusion -->
    <?php include 'bootstarp.php'; ?>
    
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <h3 class="header">ADMIN PANEL</h3>
        </div>
    </nav>
    
    <div class="container mt-4">
    <a href="logout.php" class="btn btn-warning">Logout</a>
        <div class="row">

            <div class="col-md-4">
                <div class="clickable-div" onclick="toggleForm('formContainer')">Add a new department</div>
                
                <div id="formContainer" class="form-container">
                    <form action="adfunction.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Select the graduation level</label><br>
                            <input type="radio" name="level" value="UG" id="ug" required>
                            <label for="ug">UG</label>
                            <input type="radio" name="level" value="PG" id="pg" required>
                            <label for="pg">PG</label>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Select the base</label><br>
                            <input type="radio" name="base" value="regular" id="regular" required>
                            <label for="regular">Regular</label>
                            <input type="radio" name="base" value="self" id="self" required>
                            <label for="self">Self-finance</label>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Department name</label>
                            <input type="text" class="form-control" name="department_name" placeholder="Enter department name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Select the image</label>
                            <input type="file" class="form-control-file" name="dep_img" required>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
            <!-- Add New Content -->
            <div class="col-md-4">
                <div class="clickable-div" onclick="toggleForm('contentContainer')">Add a new content</div>
                
                <div id="contentContainer" class="content-container">
                    <div class="content-section" onclick="toggleContentForm('youtubeForm')">
                        <h5>YouTube Video</h5>
                    </div>
                    
                    <div class="content-section" onclick="toggleContentForm('webForm')">
                        <h5>Weblink</h5>
                    </div>
                    
                    <div class="content-section" onclick="toggleContentForm('fileForm')">
                        <h5>Upload File</h5>
                    </div>
                </div>
                
                <div id="youtubeForm" class="content-form">
                    <h5>YouTube Video</h5>
                    <form action="addyoutube.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Select the graduation level</label><br>
                            <input type="radio" name="level" value="UG" id="ug" required>
                            <label for="ug">UG</label>
                            <input type="radio" name="level" value="PG" id="pg" required>
                            <label for="pg">PG</label>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Select the base</label><br>
                            <input type="radio" name="base" value="regular" id="regular" required>
                            <label for="regular">Regular</label>
                            <input type="radio" name="base" value="self" id="self" required>
                            <label for="self">Self-finance</label>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Department name</label>
                            <input type="text" class="form-control" name="department_name" placeholder="Enter department name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Enter the title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the title" required>
                        </div>
                        <label class="form-label">Enter YouTube URL</label>
                        <input type="url" class="form-control" name="youtube_url" placeholder="Enter YouTube URL">
                        <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
                
                <div id="webForm" class="content-form">
                    <h5>Weblink</h5>
                    <form action="addweblink.php" method="post">
                        <label class="form-label">Select the graduation level</label><br>
                        <input type="radio" name="level" value="UG" id="ug" required>
                        <label for="ug">UG</label>
                        <input type="radio" name="level" value="PG" id="pg" required>
                        <label for="pg">PG</label>
                      
                        <div class="mb-3">
                            <label class="form-label">Select the base</label><br>
                            <input type="radio" name="base" value="regular" id="regular" required>
                            <label for="regular">Regular</label>
                            <input type="radio" name="base" value="self" id="self" required>
                            <label for="self">Self-finance</label>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Department name</label>
                            <input type="text" class="form-control" name="department_name" placeholder="Enter department name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Enter the title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the title" required>
                        </div>
                        <label class="form-label">Enter Weblink</label>
                        <input type="url" class="form-control" name="weblinkurl" placeholder="Enter Weblink URL">
                        <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>

                <div id="fileForm" class="content-form">
                    <h5>Upload File</h5>
                    <form action="addfiles.php" method="post" enctype="multipart/form-data">
                        <label class="form-label">Select the graduation level</label><br>
                        <input type="radio" name="level" value="UG" id="ug" required>
                        <label for="ug">UG</label>
                        <input type="radio" name="level" value="PG" id="pg" required>
                        <label for="pg">PG</label>
                      
                        <div class="mb-3">
                            <label class="form-label">Select the base</label><br>
                            <input type="radio" name="base" value="regular" id="regular" required>
                            <label for="regular">Regular</label>
                            <input type="radio" name="base" value="self" id="self" required>
                            <label for="self">Self-finance</label>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Department name</label>
                            <input type="text" class="form-control" name="department_name" placeholder="Enter department name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Enter the title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the title" required>
                        </div>
                        <label class="form-label">Select File</label>
                        <input type="file" class="form-control-file" name="myfile">
                        <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
            
            <!-- Add New Admins -->
            <div class="col-md-4">
                <div class="clickable-div" onclick="toggleForm('adminFormContainer')">Add Admins</div>
                
                <div id="adminFormContainer" class="form-container">
                    <form action="addadmin.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Admin Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Admin Name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Admin Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Admin Email" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function toggleForm(formId) {
            const formContainer = document.getElementById(formId);
            formContainer.style.display = formContainer.style.display === 'none' || formContainer.style.display === '' ? 'block' : 'none';
        }

        function toggleContentForm(formId) {
            const form = document.getElementById(formId);
            const isVisible = form.style.display === 'block';

            const forms = document.querySelectorAll('.content-form');
            forms.forEach(form => {
                form.style.display = 'none';
            });

            form.style.display = isVisible ? 'none' : 'block';
        }
    </script>
</body>
</html>
