<?php

abstract class Category {
    abstract public function getMyCategory();
}

class Attualita extends Category {
    public function getMyCategory() {
        return "Attualità \n";
    }
}

class Sport extends Category {
    public function getMyCategory() {
        return "Sport \n";
    }
}

class Gossip extends Category {
    public function getMyCategory() {
        return "Gossip \n";
    }
}

class Storia extends Category {
    public function getMyCategory() {
        echo "Storia \n";
    }
}

$notizie = new Attualita();
echo $notizie->getMyCategory();

$sport = new Sport();
echo $sport->getMyCategory();

$gossip = new Gossip();
echo $gossip->getMyCategory();

$storia = new Storia();
echo $storia->getMyCategory();
