<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
    static public function createMyWarrior() {
        $marteauMagique = new Weapon('marteau', 100);
        $marteauMagique->setImageUrl('http://manuelmarvel.franceserv.com/Thor%27s%20Hammer_fichiers/image002.jpg');

        $thor = new MarvelWarrior($GLOBALS["warriorID"], 50, 125, 60);
        $thor->setWeapon($marteauMagique);
        $thor->setImageUrl('https://news.marvel.com/wp-content/uploads/2017/10/rag_post_master-960x540.jpg');
        $thor->saveNew();
    }

    static public function createOtherWarrior() {
        $pistoletLaser = new Weapon('pistolet', 60);
        $pistoletLaser->setImageUrl('https://media.gettyimages.com/vectors/black-and-red-ray-gun-vector-id485436918?s=612x612');

        $spock = new StartrekWarrior('Spock', 75, 150, 20);
        $spock->setWeapon($pistoletLaser);
        $spock->setImageUrl('https://s-media-cache-ak0.pinimg.com/originals/9f/e0/97/9fe0973ac90438558547b4c93f4bd9fb.png');
        $spock->saveNew();
    }

  }
