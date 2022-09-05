<?php 

require_once __DIR__ . ('/actor.php');
    class Movie {

        //properties
        private $title;
        private $genre;
        private $director;
        private $year;
        private $rating;
        private $castMembers = [];
        
        //constructor

        /**
         * 
         * @param $_title 'The movie's title'
         * @param $_genre The movie's genre (eg. horror, western, ...)
         * @param $_director Name and surname of the movie's director
         * @param $_year Year of release
         * @param $_rating ratings from IMDb 
         * 
         */
        public function __construct($_title, $_genre, $_director, $_year, $_rating){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director;
            $this->year = $_year;
            $this->rating = $_rating;  
        }

        //methods

        public function getTitle(){
            return $this-> title;
        }

        public function setTitle($_title){
            $this->title = $_title;
        }

        public function getGenre(){
            return $this-> genre;
        }

        public function setGenre($_genre){
            $this->genre = $_genre;
        }

        public function getDirector(){
            return $this-> director;
        }

        public function setDirector($_director){
            $this->director = $_director;
        }

        public function getYear(){
            return $this-> year;
        }

        public function setYear($_year){
            $this->year = $_year;
        }

        public function getRating(){
            return $this-> rating;
        }

        public function setRating($_rating){
            $this->rating = $_rating;
        }

        public function getCastMembers(){
            return $this-> castMembers;
        }

        public function addCastMember($actor){
            $this-> castMembers[]= $actor;
        }
    }
?>