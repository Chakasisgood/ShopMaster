<!--dbcon.php if file required to connect database. -->
<?php
    session_start();
    require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS that is purely connected to internet -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- title of the system -->
        <title>Sample Student CRUD</title>
</head>
<body>

<div class="container mt-4">
        <!--message.php file which is used when the transaction is done message will pop-out. -->
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Sample Students Details
                            <!-- link to create new student data --> 
                            <a href="student-create.php" class="btn btn-primary float-end"> Add Students</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thread>
                                <tr>
                                    <th>ID</th>
                                    <th>UserName</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr> 
                            </thread>  
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM users"; // code to select all data from database
                                    $query_run = mysqli_query($con, $query); // create variable on the query above 

                                    if(mysqli_num_rows($query_run) > 0) // check if the data is greater than zero then show the data in a table form
                                    {
                                        foreach($query_run as $student)// change the variables so be more specific
                                        {
                                            ?>
                                            <tr>
                                                <!-- show all data based on data save -->
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['username']; ?></td>
                                                <td><?= $student['email']; ?></td>
                                                <td><?= $student['contact']; ?></td>
                                                <td><?= $student['role']; ?></td>
                                                <td>
                                                    <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>