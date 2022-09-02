<?php 
    class Movie {

        //properties
        private $title;
        private $genre;
        private $director;
        private $year;
        private $rating;
        
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