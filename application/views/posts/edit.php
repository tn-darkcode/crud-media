<h2><?php $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
<input type="hidden" value="<?php echo $post['id']; ?>" name="id">
  <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="<?php echo $post['title']; ?>">
    <div id="title" class="form-text">title</div>
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">body</label>
    <input type="text" class="form-control" id="body" name="body" value="<?php echo $post['body']; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>