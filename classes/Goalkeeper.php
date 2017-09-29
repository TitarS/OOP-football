<?php

class Goalkeeper extends Player {

    public function playerResponsibility() {
        return $this->standTheGate() .
        $this->catchBall();
    }

    public function standTheGate() {
        return ' Stand the gate! ';
    }

    public function catchBall() {
        return ' Catch ball! ';
    }
}