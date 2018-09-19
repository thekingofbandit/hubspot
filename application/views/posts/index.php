<div class="pricing-header pt-md-5 pb-md-4 mx-auto text-center">



<div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><i class="far fa-newspaper"></i></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#"><h2><?= $title ?></h2></a>
              </h3>
              <div class="mb-1 text-muted">
				<?php echo "Today is " . date("Y/m/d") ;
						echo " " . date("l");
				?>
              </div>
              <p class="card-text text-left mb-auto"><script type="text/javascript" src="https://www.brainyquote.com/link/quotebr.js"></script></p>
              <a href="<?php echo base_url(); ?>categories">Go to Categories</a>
            </div>
           <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo base_url(); ?>assets/images/blog.svg" alt="Thumbnail [200x250]" style="width: 200px; height: 250px; padding-right: 20px" data-holder-rendered="true">
          </div>


   

    </div>

<?php foreach($posts as $post) : ?>
	
	<div class="row">
		<div class="col-md-3 mb-3">
			<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
		</div>
		<div class="col-md-9 mb-3">
			<small class="post-date">
				<h3><?php echo $post['title']; ?></h3>
				Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small><br>
		<?php echo word_limiter($post['body'], 30); ?>
		<br><br>
		<p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>