<?php

class Tennis
{
    private $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    /**
     * @param $score1
     * @param $score2
     *
     * @return string
     */
    public function getResult()
    {
        if($this->game->first_player_score == 1) {
            return 'Fifteen Love';
        }

        return 'Love All';
    }
}
