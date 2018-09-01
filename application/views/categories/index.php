<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">

<div class="container-fluid">

<div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><i class="fas fa-tags"></i></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#"><h2><?= $title ?></h2></a>
              </h3>
              <div class="mb-1 text-muted">
				<?php echo "Today is " . date("Y/m/d") ;
						echo " " . date("l");
				?>
              </div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="./posts">Continue reading</a>
            </div>
           <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo base_url(); ?>assets/images/category.svg" alt="Thumbnail [200x250]" style="width: 200px; height: 250px; padding-right: 20px" data-holder-rendered="true">
          </div>

       </div>

   

    </div>

<ul class="list-group">
<?php foreach($categories as $category) : ?>
	<li class="list-group-item list-group-item-action"  ><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
		<?php if($this->session->userdata('user_id') == $category['user_id']): ?>
			<form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
				<input type="submit" class="btn-link text-danger" value="[X]">
			</form>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>