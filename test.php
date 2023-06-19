<?php
require "mp3Player.php";

$mp3 = new mp3Player();
$mp3->setId(5);
echo $mp3->getId();
$players[] = new mp3Player();
$players[0]->addMusic('111');
$players[0]->addMusic('222');
$players[0]->addMusic('333');

foreach ($players as $player){
    $player->play();
    $player->switchUp();
    $player->play();
    $player->switchDown();
    $player->switchDown();
    $player->switchDown();
    $player->play();
}