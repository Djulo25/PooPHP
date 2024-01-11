<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('models/Phenomenon.class.php');
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
            <p class="card-text"><?php echo $p->getName(); ?></p>
            <p class="card-text"><?php echo $p->getDescription(); ?></p>
            <p class="card-text"><?php echo $p->getOrigin(); ?></p>
            <p class="card-text"><?php echo $p->getEvidence(); ?></p>
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