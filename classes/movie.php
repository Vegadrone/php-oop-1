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
    }
?>