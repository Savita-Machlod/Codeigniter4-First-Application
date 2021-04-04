<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product - Page</title>
	<link rel="stylesheet" href="http://localhost:8080/css/bootstrap.min.css"/>
</head>
<body>

  <div class="app">
    <?= $this->include('layouts/inc/navbar.php')?>
    <?= $this->renderSection('content')?>
  </div> 


    <script src="<?= base_url('js/jquery-3.6.0.js');?>"></script>
	<script src="<?= base_url('js/popper.min.js');?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js');?>"></script>
</body>
</html>