<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sent User Post Data</title>
  </head>
  <body>
		<section>
			<div class="container">
				<div class="row">
				<div class="col-md-4">&nbsp;</div>
					<div class="col-md-4">
						<div class="text-center">
						  <h3 class="text-primary"><?=$title?></h3>
						  <h5 class="text-danger"><?=$title2?></h5>
						  <h6 class="text-secondary"><?=$test?></h6>
						</div>
							<p class="text-success font-weight-bold text-center"><?=session('message')?></p>
						  <form method="POST" action="<?=url("/get_userdata")?>">
								<div class="form-group">
									<label>Name:</label>
									<input type="text" class="form-control" name="name">
								</div>
								<div class="form-group">
									<label>Age:</label>
									<input type="text" class="form-control" name="age">
								</div>
								<div class="form-group">
									<label>phonenumber:</label>
									<input type="text" class="form-control" name="phonenumber">
								</div>
								<input type="hidden" name="_token" value="<?=csrf_token()?>">
								<input type="submit" value="Submit">
						  </form>
				<div class="col-md-4">&nbsp;</div>
					</div>
				</div>
			</div>
		</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>