<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Not Found, someone stole it!</title>

     <link rel="canonical" href="https://www.ubuntu.com/" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon-32x32.png" sizes="32x32" />


    <!-- Latest compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">    
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/holder.js"></script> 
    <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
	body {
    background-color: #f9eee5;
}
</style>
</head>
<body>
<div class="container">
	

    <div class="pricing-header  pt-md-5 pb-md-4 mx-auto">

	<div id="container">
		<div class="row">
		<div class="col-md-8">
			
			<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.<h2><?php echo $heading; ?> </h2> <?php echo $message; ?>
</div>
					
		</div>
		
		
	</div>
		<div class="col-md-4">
			<img class="card-img-right flex-auto  d-lg-block" src="<?php echo base_url(); ?>assets/images/dancing_bear.gif" alt="Thumbnail [200x250]" style="width: auto; height: 250px; padding-right: 20px" data-holder-rendered="true"><br>
			<a class="btn btn-primary" href="<?php echo base_url(); ?>">Save Me Now!</a>
		</div>
		</div>

	</div>	
</div>	
	<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.min.js"></script>
</body>
</html>