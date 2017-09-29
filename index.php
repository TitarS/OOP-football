<?php
require 'autoloader.php';

///Create Player
$messi = new Forward(51, 'Messi', 9);
$zidan = new Defender(10, 'Zidan', 10);
$casillas = new Goalkeeper(1, 'Casillas', 9);
$ronaldo = new Forward(7, 'Ronaldo', 9);
$ibragimovich = new Forward(7, 'Ibragimovich', 9);

$shovkovskiy = new Goalkeeper(3, 'Shovkovskiy', 7);
$shevchenko = new Forward(7, 'Shevchenko', 8);
$konoplyanka = new Defender(10, 'Konoplyanka', 4);
$husyev = new Defender(5, 'Husyev', 6);
$khacheridi = new Defender(34, 'Khacheridi',5);

///Create Coach
$SergioConceicao = new HeadCoach('Sergio Conseicao', '5years');
$OlehBlokhin = new HeadCoach('Oleh Blokhin', '20 years');

///Create Team
$portu = new Team('Potru', 'Spain', $SergioConceicao, 4.9);
$dynamo = new Team('Dynamo', 'Ukraine', $OlehBlokhin, 4.1);

//Add player
$portu->addPlayer($casillas);
$portu->addPlayer($messi);
$portu->addPlayer($zidan);
$portu->addPlayer($ronaldo);
$portu->addPlayer($ibragimovich);
$portu->addPlayer($shovkovskiy);

// Delete player
$portu->deletePlayer($shovkovskiy);

$dynamo->addPlayer($shovkovskiy);
$dynamo->addPlayer($shevchenko);
$dynamo->addPlayer($konoplyanka);
$dynamo->addPlayer($husyev);
$dynamo->addPlayer($khacheridi);

$football = new Football('Olimpiyskiy', '1-30', 'Clattenburg');
$football->addTeams($portu, $dynamo);
//var_dump($football);
echo $football->soccerMatch($portu, $dynamo);



//var_dump($dynamo->play());

$dynamo->play();

// Polymorphism
echo '<br>';
$training = new Training();
echo $training->showSkill($casillas);
echo '<br>';