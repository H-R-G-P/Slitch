<?php


namespace App\Dto;


class Statistic
{
    /**
     * The percentage of matches of unique words with other texts.
     *
     * @var int Percentage.
     */
    private int $matches;

    /**
     * @return int
     */
    public function getMatches(): int
    {
        return $this->matches;
    }

    /**
     * @param int $matches
     */
    public function setMatches(int $matches): void
    {
        $this->matches = $matches;
    }
}