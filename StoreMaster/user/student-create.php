<?php
session_start();// session start when the add student link was click an direct 
?>

<!doctype html>
<html lang="en">
    <head> 
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Sample Students Create</title>
</head>
<body>
    <div class="container mt-5">
        <!-- message.php file which is used when the transaction is done message will pop-out. -->
        <?php include('message.php'); ?>

        <div class="row"> 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Sample Student Add 
                            <a href="index.php" class="btn btn-danger float-end"> BACK </a>
                        </h4>
                    </div>    
                    <div class="card-body">
                        <!-- redirect to code.php when click submit -->
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label> UserName </label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label> Email </label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label> Contact </label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label> Role </label>
                                <input type="text" name="role" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save User</button>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


