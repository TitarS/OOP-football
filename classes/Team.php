<?php

class Team { //fc
    public  $nameTeam;
    private $country;
    private $coach;
    public $rating;
    private $player = [];

    public function __construct($nameTeam, $country, CoachInterface $coach, $rating) {
        $this->nameTeam = $nameTeam;
        $this->country = $country;
        //$this->player[] = $player;
        $this->coach = $coach;
        $this->rating = $rating;
    }

    public function addPlayer(Player $player) {
        $this->player[$player->name] = $player;
        echo 'Добавили ' . $player->name . " в комманду {$this->nameTeam} <br>";
    }

    public function deletePlayer(Player $player) {
        if(array_key_exists($player->name, $this->player)) {
            unset($this->player[$player->name]);
            echo '<br> Удалили ' . $player->name . " с команды {$this->nameTeam} <br>";
        }
        else {
            throw new Exception ("Нету такого игрока в команде!");
        }
    }

    public function play() {
        foreach ($this->player as $name_player => $player) {
            echo $name_player . $player->play();
        }
    }
}