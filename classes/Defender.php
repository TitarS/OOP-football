<?php

class Defender extends Player{

    public function playerResponsibility() {
        return $this->pickUpBall() .
        $this->runInDefense();
    }

    public function runInDefense() {
        return ' Run in defense! ';

    }

    public function pickUpBall(){
        return ' Pick up ball! ';
    }
}