<?php

require_once 'Laser.php';
require_once 'Missiles.php';
require_once 'Shield.php';
require_once 'Armor.php';

class Ironman {
    public $attackSystem;
    public $defenseSystem;
    public static $ironmanCounter = 0;

    public function __construct(Attack $attack, Defense $defense) {
        $this->attackSystem = $attack;
        $this->defenseSystem = $defense;
        self::$ironmanCounter++;
    }

    public function ironmanAttack() {
        echo $this->attackSystem->useAttack() . "\n";
    }

    public function ironmanDefense() {
        echo $this->defenseSystem->useDefense() . "\n";
    }
}

$ironman1 = new Ironman(new Laser(), new Shield());
$ironman2 = new Ironman(new Missiles(), new Armor());
$ironman3 = new Ironman(new Laser(), new Armor());
$ironman4 = new Ironman(new Missiles(), new Shield());

$ironman1->ironmanAttack();
$ironman2->ironmanDefense();

echo "-------------------------\n";
echo "Ironman creati: " . Ironman::$ironmanCounter . "\n";
