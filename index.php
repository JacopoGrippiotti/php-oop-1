<?php 

class Movie{
    public $title;
    public $genre;
    public $year;

    function __construct($_title,String $_genre, INT $_year){

        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    public function getTitle(){
        return $this-> title;
    }
}

$actionFilm = new Movie('Alla ricerca del calice perduto','azione',2003);
$horrorFilm = new Movie('Saw l\'\enigmista','horror',2010);
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 </body>
</html>