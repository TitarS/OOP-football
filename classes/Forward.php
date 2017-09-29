<?php

class Forward extends Player{

    public function playerResponsibility() {
        return $this->runAtFront() .
        $this->beatOnGoal();
    }

    public function runAtFront() {
        return ' Run at front! ';
    }

    public function beatOnGoal() {
        return ' Beat on goal! ';
    }
}