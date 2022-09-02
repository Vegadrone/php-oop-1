<?php 
    class Actor{

    //properties
        private $name;
        private $surname;
        private $photo;

    //constructor
        public function __construct($_name, $_surname, $_photo){
            $this-> name = $_name;
            $this-> surname = $_surname;
            $this-> photo = $_photo;            
        }
    
    //methods
        public function getActorName(){
            return $this-> name;
        }

        public function getActorSurname(){
            return $this-> surname;
        }

        public function getActorPhoto(){
            return $this-> photo;
        }
    }
?>