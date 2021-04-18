<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>V1</title>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('css/bootstrap-icons.css'); ?>">
	<style>
		body{
			background: #0f0c29;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
		.navbar-brand,.navbar ul li a{color:#fff !important;}
		
		.bg-link.active{background:#f39c12 !important;}
	</style>
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