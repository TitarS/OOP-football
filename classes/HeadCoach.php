<?php

class HeadCoach implements CoachInterface{
    private $name;
    private $experience;

    public function __construct($name, $experience) {
        $this->name = $name;
        $this->experience = $experience;
    }

    public function ableToTrain() {

    }

    public function raiseTeamSpirit() {

    }
}