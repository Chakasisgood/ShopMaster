<?php
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>Sample Student View</title>
</head>
<body>

	<div class="container mt-5">

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4> Sample Student View Details

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
								
								<div class="mb-3">
									<label> UserName</label>
									<p class="form-control">
										<?=$student['username'];?>
									</p>
								<div class="mb-3">
									<label>Email</label>
									<p class="form-control">
										<?=$student['email'];?>
									</p>
								<div class="mb-3">
									<label>Contact </label>
									<p class="form-control">
										<?=$student['contact'];?>
									</p>
								<div class="mb-3">
									<label>Role</label>
									<p class="form-control">
										<?=$student['role'];?>
									</p>
								</div>

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