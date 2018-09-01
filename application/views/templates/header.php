<html>

<head>
    <title>Hubspot</title>

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
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Hubspot 1.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
                </li>

                <?php if(!$this->session->userdata('logged_in')) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in')) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
                <?php endif; ?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>



    <div class="container">
        <!-- Flash messages -->
        <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
        <?php endif; ?>