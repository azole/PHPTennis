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
        return 'Love All';
    }
}
