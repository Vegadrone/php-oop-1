<?php 
    class Movie {

        //properties
        private $title;
        private $genre;
        private $director;
        private $year;
        private $rating;
        
        //constructor
        public function __construct($_title, $_genre, $_director, $_year, $_rating){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director;
            $this->year = $_year;
            $this->rating = $_rating;
        }

        //methods

        public function getTitle(){
            return $this->title;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function getDirector(){
            return $this->director;
        }

        public function getYear(){
            return $this->year;
        }

        public function getRating(){
            return $this->rating;
        }  
    }

    
?>