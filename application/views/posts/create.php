<h2><?php $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
  <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
    <div id="title" class="form-text">title</div>
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">body</label>
    <input type="text" class="form-control" id="body" name="body">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>