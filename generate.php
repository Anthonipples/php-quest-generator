<?php
    class quest{
       public $questGalaxy = 'Nothing';

        public function getLocation(){
            $locations = array('Gertus Prime','Helios minor','Yelod serup','hujah 4th');
            $location = array_rand($locations,1); 
            $questGalaxy = $locations[$location];
            $this->questGalaxy = $questGalaxy;
        }
        public function getTitle(){
            $firstPart = array('Get','fetch','Take','carry');
            $secondPart = array('Nelod','Gary','Bertus','Francene');
            $thirdPart = array('Fuel','MK-32','priceless artifact','Biosynth');
        }
        public function genQuest(){
            $this->getLocation();
        }
    }

    $quest_1 = new quest;
    $quest_1->genQuest();
    

?>