<?php
class Movie
{
    public $name;
    public $genre;

    public function __construct($name, $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_genre()
    {
        return $this->genre;
    }
}
