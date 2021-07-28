<?php


namespace App\Dto;


class TextInfo
{
    /**
     * Words separated spaces
     *
     * @var string
     */
    private string $words;

    /**
     * @var int
     */
    private int $wordCount;

    /**
     * @var int
     */
    private int $uniqWordCount;

    /**
     * @return string
     */
    public function getWords(): string
    {
        return $this->words;
    }

    /**
     * @param string $words
     */
    public function setWords(string $words): void
    {
        $this->words = $words;
    }

    /**
     * @return int
     */
    public function getWordCount(): int
    {
        return $this->wordCount;
    }

    /**
     * @param int $wordCount
     */
    public function setWordCount(int $wordCount): void
    {
        $this->wordCount = $wordCount;
    }

    /**
     * @return int
     */
    public function getUniqWordCount(): int
    {
        return $this->uniqWordCount;
    }

    /**
     * @param int $uniqWordCount
     */
    public function setUniqWordCount(int $uniqWordCount): void
    {
        $this->uniqWordCount = $uniqWordCount;
    }
}