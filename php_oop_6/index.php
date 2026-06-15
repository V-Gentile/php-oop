<?php

require_once ('class.php');

class Post {
    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($titolo, Category $categoria, $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getCategoria() {
        return $this->categoria->getMyCategory();
    }

    public function getTag() {
        return $this->tag;
    }

}

$post1 = new Post("Titolo 1", new Attualita(), "tag 1");
$post2 = new Post("Titolo 2", new Sport(), "tag 2");
$post3 = new Post("Titolo 3", new Gossip(), "#vip #estate");

$post1->getCategoria();
echo $post2->getTitolo();
echo $post3->getTag();
