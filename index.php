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
$horrorFilm = new Movie('Saw the enigmist','horror',2010);
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <ul>
        <li>
            <h1><?php echo $actionFilm->getTitle();?></h1>
            <p><?php  echo $actionFilm->genre;?></p>
            <p><?php  echo $actionFilm->year;?></p>
        </li>
        <li>
            <h1><?php echo $horrorFilm->getTitle();?></h1>
            <p><?php  echo $horrorFilm->genre;?></p>
            <p><?php  echo $horrorFilm->year;?></p>
        </li>
    </ul>
 </body>
</html>