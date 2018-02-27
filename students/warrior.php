<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'AlexB';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {
    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $imageUrl;
    public $weapon;

    public function __construct($id, $speed=30, $life=100, $shield=20)
    {
        $this->id = $id;
        $this->speed = $speed;
        $this->life = $life;
        $this->shield = $shield;
    }

    public function SetWeapon (Weapon $weapon) {
        $this->weapon = $weapon;
    }

    public function SetImageUrl ($imageUrl) {
        $this->imageUrl = $imageUrl;
    }
};

class StartrekWarrior extends Warrior {
    public $mentalPower;

    public function __construct($id, $speed=30, $life=100, $shield=20, $mentalPower=8)
    {
        parent::__construct($id, $speed, $life, $shield);
        $this->mentalPower = $mentalPower;
    }

    public function power() {
        return $this->mentalPower;
    }
};

class MarvelWarrior extends Warrior {
    public $superPower;

    public function __construct($id, $speed=30, $life=100, $shield=20, $superPower=100)
    {
        parent::__construct($id, $speed, $life, $shield);
        $this->superPower = $superPower;
    }

    public function power() {
        return $this->superPower;
    }
};

class PokemonWarrior extends Warrior {
    public $level;

    public function __construct($id, $speed=30, $life=100, $shield=20, $level=1)
    {
        parent::__construct($id, $speed, $life, $shield);
        $this->level = $level;
    }

    public function power() {
        return $this->level;
    }
};

class Weapon {
    public $id;
    public $strength;
    public $imageUrl;

    public function __construct($id, $strength)
    {
        $this->id = $id;
        $this->strength = $strength;
    }

    public function SetImageUrl ($imageUrl) {
        $this->imageUrl = $imageUrl;
    }
}
