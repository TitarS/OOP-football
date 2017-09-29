<?php

abstract class Player {
    private $number;
    public $name;
    //private $rating;
    //private $soccerUniform;

    public function __construct($number, $name/*, $rating*/) {
        $this->name = $name;
        $this->number = $number;
        //$this->rating = $rating;
    }

    public abstract function playerResponsibility();

    public function play() {
        return $this->takeTheBall() .
        $this->ballToPass() .
        $this->hitTheBall();

    }

    public function takeTheBall() {
        return ' take the ball. ';
    }

    public function hitTheBall() {
        return ' hit the ball. ';
    }

    public function ballToPass() {
        return ' ball to pass. ';
    }
}