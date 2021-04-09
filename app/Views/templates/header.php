<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>V1</title>
	<link rel="stylesheet" href="http://localhost:8080/css/bootstrap.min.css"/>
	<style>
		body{
			background: #0f0c29;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
		.navbar-brand,.navbar ul li a{color:#fff !important;}
    .form-wrapper{
      border-radius:7px;
    }
    .form-wrapper label{
      font-weight:bold;
    }
    .errors li{
      list-style: none;
      width: 100%;
      text-align: center;
    }
    .errors ul{
      padding-left: 0;
      margin-bottom: 0;
    }
    nav>ul>li .nav-item.active{background-color:#ec1 !important;}
    @media (max-width: 768px){
        .form-wrapper .text-right{
          text-align: center !important;
        }
        .form-wrapper .btn-primary{
          display: block;
          margin: 0 auto;
        }
    }
	</style>
</head>
<body>
<?php 
    $uri = service('uri');
?>
<!-- Navbar Starts Here-->
<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #DD4814;">
 
  <div class="container">
    <a class="navbar-brand" href="/">V1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if(session()->get('isLoggedIn')): ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
          <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
          <a class="nav-link" href="/profile">Profile</a>
        </li> 
        <li class="nav-item <?= ($uri->getSegment(1) == '/../sellers/' ? 'active' : null) ?>">
          <a class="nav-link" href="/sellers/">Seller</a>
        </li> 
        <li class="nav-item <?= ($uri->getSegment(1) == 'products' ? 'active' : null) ?>">
          <a class="nav-link" href="/products/">Product</a>
        </li>        
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>   
      </ul>
      <?php else: ?>  
       
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
          <a class="nav-link" aria-current="page" href="/">Login</a>
        </li>
        <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
          <a class="nav-link" href="/register">Register</a>
        </li>        
      </ul>
    
    <?php endif; ?>
    </div>
  </div>
  
</nav>
<!-- Navbar Ends Here-->