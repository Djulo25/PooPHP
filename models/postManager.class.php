<?php
require_once 'Model.class.php'; //require_once permet d'importer le fichier
class PostManager  extends Model{ //extends ajoute les propriétés et les méthodes de Model à PostManager soit $pdo, setBdd() et getBdd(). C'est l'heritage
    private $posts = [];

    public function getPosts() { //getPosts est public afin de respecter l'encaapsulation, on ne peut pas accepter aux posts
        return $this->posts; //on pourrais modifier les posts, on ne peut que les lire
    }

    public function addPost(Post $post) {
        $this->posts[] = $post; //equivalent de array_push;
    }

    public function getPostsFromDb() {
        $req = $this->getBdd()->prepare('SELECT * FROM posts ORDER BY id DESC');
        $req->execute();
        $posts = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($posts as $p) {
            $this->addPost(new Post(
                $p['id'],
                $p['name'],
                $p['description'],
                $p['origin'],
                $p['evidence']
            ));
        }
    }
}