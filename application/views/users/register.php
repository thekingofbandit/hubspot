<div class="pricing-header pt-md-5 pb-md-4 mx-auto text-center">



<div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><i class="fas fa-user-lock"></i></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#"><h2><?= $title ?></h2></a>
              </h3>
              <div class="mb-1 text-muted">
				<?php echo "Today is " . date("Y/m/d") ;
						echo " " . date("l");
				?>
              </div>
              <p class="card-text text-left mb-auto"><script type="text/javascript" src="https://www.brainyquote.com/link/quotebr.js"></script></p>Already have an account? 
              <a href="<?php echo base_url(); ?>users/login">Sign In</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo base_url(); ?>assets/images/register.svg" alt="Thumbnail [200x250]" style="width: 200px; height: 250px; padding-right: 20px" data-holder-rendered="true">
          </div>



   

    </div>



<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><i class="fas fa-user-lock"></i> </br> <?= $title; ?></h1>
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form-group">
				<label>Zipcode</label>
				<input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Let me register!</button>

		</div>
		<div class="col-md-8 col-md-offset-2">
			<img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo base_url(); ?>assets/images/dancing_bear.gif" alt="Thumbnail [200x250]" style="width: auto; height: 250px; padding-right: 20px" data-holder-rendered="true">
		</div>
	</div>
<?php echo form_close(); ?>


