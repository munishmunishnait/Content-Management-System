<div class="form-container" style="margin:0 auto; width:50%">
<h2 class="text-center mt-4 mb-4"><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group mt-4">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group mt-4">
    <label>Description</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form-group mt-4">
  <label>Category</label>
  <select name="category_id" class="form-control mt-4">
    <?php foreach($categories as $category): ?>
      <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
    <?php endforeach; ?>
  </select>
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>

</div>