<h2><?= $title ?></h2>
<br/>
<hr>
<?php foreach($posts as $post) : ?>
    <h5><?php echo $post['title']; ?></h5>
    <?php echo $post['body']; ?>
    <br><br>
    <p><a class="btn" href="<?php echo site_url('/posts/'.$post['slug']); ?>">View</a></p>
    <hr>
<?php endforeach; ?>
