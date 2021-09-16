<?php


namespace App\Dto;


class Statistic
{
    private string $wordsCount = "test";

    /**
     * @return string
     */
    public function getWordsCount(): string
    {
        return $this->wordsCount;
    }

    /**
     * @param string $wordsCount
     */
    public function setWordsCount(string $wordsCount): void
    {
        $this->wordsCount = $wordsCount;
    }
}