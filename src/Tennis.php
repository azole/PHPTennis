<?php

class Tennis
{
    private $game;
    private $scoreLookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];

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
        if($this->game->first_player_score > 0) {
            return $this->scoreLookup[$this->game->first_player_score] . ' Love';
        }


        return 'Love All';
    }
}
