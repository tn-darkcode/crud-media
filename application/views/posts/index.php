<h2><?= $title ?></h2>

<?php foreach($posts as $post): ?>
<h3><?php echo $post['title']; ?></h3>
    <small class="post-date"><?php echo $post['created_at']; ?></small><br>
<?php echo $post['body']; ?>
<br>
<br>
<p><a class="btn btn-success" href="<?php echo site_url('/posts/'. $post['slug']); ?>">read more</a></p>
<?php endforeach; ?>