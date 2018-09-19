
<h2 class="display-4 font-italic">
    <?php echo $post['title']; ?>
</h2>
<small class="post-date blog-post-meta">Posted on:
    <?php echo $post['created_at']; ?></small><br>
<img class="embed-responsive" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<hr>
<div class="row ">
     <div class="col-sm-2">
    <form>
        <a class="btn btn-secondary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>"> Edit</a>
    </form>     
    
    <?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    </div>
</div>
<?php endif; ?>


<hr>
<h3>Comments</h3>
<?php if($comments) : ?>
<?php foreach($comments as $comment) : ?>
<div class="well">
    <h5>
        <?php echo $comment['body']; ?> by <span class="badge badge-dark">
            <?php echo $comment['name']; ?></span></h5>
</div>
<?php endforeach; ?>
<?php else : ?>
<p>No Comments To Display</p>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button class="btn btn-success" type="submit">Submit</button>
</form>