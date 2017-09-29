<?php

class OtherCoach implements CoachInterface {
    private $name;
    private $experience;

    public function __construct($name, $experience) {
        $this->name = $name;
        $this->experience =$experience;
    }

    public function ableToTrain() {

    }
}