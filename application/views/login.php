<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="<?php echo base_url('assetslogin/img/mdb-favicon.ico')?>" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assetslogin/css/bootstrap.min.css')?>">
  <!-- Material Design Bootstrap -->

  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?php echo base_url('assetslogin/css/style.css')?>">
</head>
<body>

  <!-- Start your project here-->  
  <!-- Default form login -->
<form class="text-center border border-light p-5" method="post" action="<?php echo base_url('login/aksi_login'); ?>">

<p class="h4 mb-4">Sign in</p>

<!-- Email -->
<input type="text" id="username" name="username" class="form-control mb-4" placeholder="Username">

<!-- Password -->
<input type="password" id="password" name="password" class="form-control mb-4" placeholder="Password">



<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

</form>
<!-- Default form login -->
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url('assetslogin/js/jquery.min.js')?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url('assetslogin/js/popper.min.js')?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assetslogin/js/bootstrap.min.js')?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assetslogin/js/mdb.min.js')?>"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
