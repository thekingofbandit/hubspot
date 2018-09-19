 <h2><i class="fas fa-marker"></i> <?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>


<div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; background: #f3f3f3;"></div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image <small>*jpg 400px x 400px</small></span><span class="fileinput-exists">Change</span><input type="file" name="userfile" size="20" ></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
  <button type="submit" class="btn btn-success">Create a Post</button>
</div>
  
</form>
<script type="text/javascript">
      CKEDITOR.replace( 'editor1' );
   //ready
                
            </script>