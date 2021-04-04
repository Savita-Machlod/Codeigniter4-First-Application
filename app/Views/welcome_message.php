<?php //$this->extend('layouts/frontend.php'); ?>
<?php //$this->section('content');?> 
<!--<h1>Hello World!</h1>-->
	<?php //$this->endsection();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css');?>">
	<style>
		body{
			background: #0f0c29;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}
	</style>
</head>
<body>
<!-- Navbar Starts Here-->
<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #DD4814;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:#fff;">V1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
   
      
    </div>
  </div>
</nav>
<!-- Navbar Ends Here-->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Login
                        <a href="<?= base_url('sellers')?>" class="btn btn-info btn-sm float-end">New User?</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('sellers/add')?>" method="POST">
                        <div class="form-group mb-2">
                            <label><strong>Email-id</strong></label>
                            <input type="text" name="name_of_org" class="form-control" placeholder="Enter The Email-id" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Password</strong></label>
                            <input type="text" name="type_of_org" class="form-control" placeholder="Enter The Password" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Confirm Password</strong></label>
                            <input type="text" name="name_of_owner" class="form-control" placeholder="Enter The Confirm Password" required>
                        </div>
                       
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary mt-2">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>