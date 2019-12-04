<h2><?= $title ?></h2>
<br/>
<?php foreach($posts as $post) : ?>
    <h5 class="post-date"><?php echo $post['title']; ?></h5>
    <?php echo $post['body']; ?>
<?php endforeach; ?>