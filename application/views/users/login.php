<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">

<div class="container-fluid">

<div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#"><h2><?= $title ?></h2></a>
              </h3>
              <div class="mb-1 text-muted">
				<?php echo "Today is " . date("Y/m/d") ;
						echo " " . date("l");
				?>
              </div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>Don't Have an Account?
              <a href="<?php echo base_url(); ?>users/register">Go to Register</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo base_url(); ?>assets/images/login.svg" alt="Thumbnail [200x250]" style="width: 200px; height: 250px; padding-right: 20px" data-holder-rendered="true">
          </div>

       </div>

   

    </div>

<?php echo form_open('users/login'); ?>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>