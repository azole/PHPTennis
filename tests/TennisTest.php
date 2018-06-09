<?php
require __DIR__ . '/../src/Tennis.php';
require __DIR__ . '/../src/Game.php';

use PHPUnit\Framework\TestCase;

final class TennisTest extends TestCase
{
    const AnyGameId = 1;
    private $tennis;

    /**
     * @test
     * @dataProvider scoreProvider
     *
     * @param $player1_name
     * @param $player2_name
     * @param $player1
     * @param $player2
     * @param $expected
     */
    public function it_should_get_tennis_score($player1_name, $player2_name, $score1, $score2, $expected)
    {
        $this->GivenTennis(0, 0);

        $this->assertEquals($expected, $this->tennis->getResult());
    }

    public function scoreProvider()
    {
        return [
            ['Joey', 'Tom', 0, 0, 'Love All'],
//            ['Joey', 'Tom', 1, 0, 'Fifteen Love'],
//            ['Joey', 'Tom', 2, 0, 'Thirty Love'],
//            ['Joey', 'Tom', 3, 0, 'Forty Love'],
//            ['Joey', 'Tom', 0, 1, 'Love Fifteen'],
//            ['Joey', 'Tom', 0, 2, 'Love Thirty'],
//            ['Joey', 'Tom', 1, 1, 'Fifteen All'],
//            ['Joey', 'Tom', 2, 2, 'Thirty All'],
//            ['Joey', 'Tom', 3, 3, 'Deuce'],
//            ['Joey', 'Tom', 4, 4, 'Deuce'],
//            ['Joey', 'Tom', 10, 10, 'Deuce'],
//            ['Joey', 'Tom', 4, 3, 'Joey Adv'],
//            ['Joey', 'Tom', 3, 4, 'Tom Adv'],
//            ['Joey', 'Tom', 5, 6, 'Tom Adv'],
//            ['Joey', 'Tom', 4, 0, 'Joey Win'],
//            ['Joey', 'Tom', 0, 4, 'Tom Win'],
//            ['Joey', 'Tom', 4, 1, 'Joey Win'],
//            ['Joey', 'Tom', 4, 2, 'Joey Win'],
//            ['Joey', 'Tom', 5, 3, 'Joey Win'],
//            ['Joey', 'Tom', 3, 5, 'Tom Win'],
//            ['Joey', 'Tom', 7, 5, 'Joey Win'],
//            ['Joey', 'Tom', 10, 8, 'Joey Win'],
        ];
    }

    /**
     * @param $score1
     * @param $score2
     * @return Game
     */
    public function GivenTennis($score1, $score2)
    {
        $game = new Game();
        $game->id = self::AnyGameId;
        $game->first_player_score = $score1;
        $game->second_player_score = $score2;

        $this->tennis = new Tennis($game);
    }

}
