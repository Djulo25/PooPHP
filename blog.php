<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('models/Post.class.php');
require_once('models/postManager.class.php');

$postManager = new PostManager();
$postManager->getPostsFromDb();


// Use the correct variable name $posts instead of $mesposts


ob_start();
?>

<h1>Blog</h1>

<?php foreach ($postManager->getPosts() as $p) { ?>
    <div class="card mb-3">
    <div class="card-body">
            <h5 class="card-title"><?php echo $p->getHeader(); ?></h5>
            <p class="card-text"><?php echo $p->getTitle(); ?></p>
            <p class="card-text"><?php echo $p->getAuthor(); ?></p>
            <p class="card-text"><?php echo $p->getImage(); ?></p>
            <p class="card-text"><?php echo $p->getdate(); ?></p>
        </div>
    </div>
    </div>
<?php } ?>

<a href="#"><button type="button" class="btn btn-secondary">Ajouter un post</button></a>

<?php
$title = 'blog';
$content = ob_get_clean();
require_once 'Template.php';
?>