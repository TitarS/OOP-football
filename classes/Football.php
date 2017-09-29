<?php

class Football {
    private $teams = [];
    private $footballField;
    private $time;
    private $referee;
    private $account = [];

    public function __construct($footballField, $time, $referee) {
        $this->footballField = $footballField;
        $this->time = $time;
        $this->referee = $referee;
    }

    public function addTeams($teams1, $teams2) {
        if($teams1 && $teams2 instanceof Team){
            $this->teams[] = $teams1;
            $this->teams[] = $teams2;
        }
        else {
            die ('Not Team!');
        }
    }

    public function chooseField() {

    }

    public function soccerMatch(Team $team1, Team $team2) {
        return $team1->rating > $team2->rating ? 'victory ' . $team1->nameTeam : 'losing ' . $team1->nameTeam;
    }

    public function changeAccount($time, Player $player) {
        $this->account[$time] = $player->name;
    }
}