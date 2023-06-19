<?php
require 'Player.php';
require 'Id.php';
class mp3Player implements Player{
    private $music = [];
    private $current = 0;

    use Id;

    function addMusic($sound){
        $this->music[] = $sound;
    }

    function play(){
        if (!empty($this->music)){
            echo $this->music[$this->current] . '<br>';
        }
        else{
            echo 'Плейлист пуст!<br>';
        }
    }

    function switchUp(){
        if ($this->current + 1 > count($this->music)){
            $this->current = 0;
        }
        else{
            $this->current++;
        }
    }

    function switchDown()
    {
        if ($this->current - 1 < 0){
            $this->current = count($this->music) - 1;
        }
        else{
            $this->current--;
        }
    }
}