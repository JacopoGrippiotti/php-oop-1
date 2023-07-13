<?php 

class Movie{
    public $title;
    public $genre;
    public $year;

    function __construct(String $_title,String $_genre, INT $_year){

        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    public function getTitle(){
        return $this-> title;
    }
}
?>