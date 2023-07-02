<?php 

class Movie {

    public $title;
    public $category;
    public $duration;
    public $author;
    public $minAge;


    function __construct($_title, $_category, $_duration,$_author, $_age){
        $this->title = $_title;
        $this->category = $_category;
        $this->duration = $_duration;
        $this->minAge = $this->adultsOnly($_age);
        $this->author = $_author;
    }

    function adultsOnly($_int){
        return $_int > 18 ? $this->minAge = 'Film non adatto ai minoiri' : $this->minAge = 'Film per tutta la famiglia';
    }
}
?>