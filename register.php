<?php
require_once('ATGcontroller.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Task_3 | PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div>
	<?php

	?>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="card" >
			  <img src="image2.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
					<form action="register.php" method="post">





									<h1>Computer Engineering</h1>
									<p>Fill up the form with correct values.</p>
									<hr class="mb-3">


									<label for="location"><b>Location</b></label>
									<input class="form-control" id="location"  type="text" name="location" required>

									<hr class="mb-3">
									<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
								</div>
							</div>

					</form>
			  </div>
			</div>
		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){



			var location	= $('#location').val();



				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'index.php',
					data: {location: location},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})

					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});


			}else{

			}





		});


	});

</script>
</body>
</html>
