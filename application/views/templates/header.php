<html>

<head>
    <title>Hubspot</title>

     <link rel="canonical" href="https://www.ubuntu.com/" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">



    <!-- Latest compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/regular.css">
    <script src="<?php echo base_url(); ?>assets/fontawesome/js/all.js"></script>
       
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
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo base_url(); ?>assets/images/logo.svg" alt="Thumbnail [200x250]" style="width: 200px; height: 20px; padding-right: 20px" data-holder-rendered="true"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>about"><i class="fas fa-user-friends"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts"><i class="far fa-newspaper"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>categories"><i class="fas fa-tags"></i> Categories</a>
                </li>

                <?php if(!$this->session->userdata('logged_in')) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/login"><i class="fas fa-door-open"></i> Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/register"><i class="fas fa-user-lock"></i> Register</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in')) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts/create"><i class="fas fa-marker"></i> Create Post</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories/create"><i class="fas fa-pencil-alt"></i> Create Category</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/logout"><i class="fas fa-door-closed"></i> Logout</a></li>
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