<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
    static public function createMyWarrior() {
        $marteauMagique = new Weapon('marteau', 100);
        $marteauMagique->setImageUrl('http://manuelmarvel.franceserv.com/Thor%27s%20Hammer_fichiers/image002.jpg');

        $thor = new MarvelWarrior($GLOBALS["warriorID"], 50, 100, 60);
        $thor->setWeapon($marteauMagique);
        $thor->setImageUrl('https://news.marvel.com/wp-content/uploads/2017/10/rag_post_master-960x540.jpg');
        $thor->saveNew();
    }

    static public function createOtherWarrior() {
        $pistoletLaser = new Weapon('pistolet', 60);
        $pistoletLaser->setImageUrl('https://media.gettyimages.com/vectors/black-and-red-ray-gun-vector-id485436918?s=612x612');

        $spock = new StartrekWarrior('Spock', 75, 100, 20);
        $spock->setWeapon($pistoletLaser);
        $spock->setImageUrl('https://s-media-cache-ak0.pinimg.com/originals/9f/e0/97/9fe0973ac90438558547b4c93f4bd9fb.png');
        $spock->saveNew();

        $eclairs = new Weapon('electricité', 150);
        $eclairs->setImageUrl('http://www.krmg.com/rw/Pub/p4/KRMG/2013/06/25/Images/photos.medleyphoto.3579548.jpg');

        $pikachu = new PokemonWarrior('pikachu', 110, 40, 40);
        $pikachu->setWeapon($eclairs);
        $pikachu->setImageUrl('http://img0.gtsstatic.com/insolite/pikachu_176058_wide.jpg');
        $pikachu->saveNew();

        $epee = new Weapon('épée', 80);
        $epee->setImageUrl('https://thumbs.dreamstime.com/b/cartoon-sword-vector-illustration-38016133.jpg');

        $AntMan = new MarvelWarrior('ant man', 150, 50, 20);
        $AntMan->setWeapon($epee);
        $AntMan->setImageUrl('https://imgix.ranker.com/user_node_img/50040/1000798125/original/black-ant-comic-book-characters-photo-u1?w=650&q=50&fm=jpg&fit=crop&crop=faces');
        $AntMan->saveNew();
    }

  }
