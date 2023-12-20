<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>Sample Student Edit</title>
</head>
<body>

	<div class="container mt-5">

		<?php include('message.php'); ?>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4> Sample Student Edit

							<a href="index.php" class="btn btn-danger float-end">BACK</a>
						</h4>
					</div>
					<div class="card-body">

						<?php
						    if(isset($_GET['id']))
						    {
							    $student_id = mysqli_real_escape_string($con, $_GET['id']);
							    $query = "SELECT * FROM users WHERE id='$student_id' ";
							    $query_run = mysqli_query($con, $query);

							    if (mysqli_num_rows($query_run) > 0) 
                                {
								    $student = mysqli_fetch_array($query_run);
								    ?>

								    <!-- form in editing and updating the data -->
                                    <form action="code.php" method="POST">
									    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

								        <div class="mb-3">
									        <label>UserName</label>
									        <input type="text" name="username" value="<?=$student['username'];?>" class="form-control">
								        </div>
								        <div class="mb-3">
									        <label>Email</label>
									        <input type="email" name="email" value="<?=$student['email'];?>" class="form-control">
								        </div>
								        <div class="mb-3">
									        <label>Contact</label>
									        <input type="text" name="contact" value="<?=$student['contact'];?>" class="form-control">
								        </div>
								        <div class="mb-3">
									        <label>Role</label>
									        <input type="text" name="role" value="<?=$student['role'];?>" class="form-control">
								        </div>
								        <div class="mb-3">
									        <button type="submit" name="update_student" class="btn btn-primary">Update Student
									        </button>
								        </div>

							        </form>
							        <?php
                                }
						        else
						        {
							        echo "<h4>No Such Id Found</h4>";
						        }
					        }
					    ?>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>

    <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>