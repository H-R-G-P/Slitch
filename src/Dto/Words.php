<?php

namespace App\Dto;

use App\Entity\Languages;

class Words
{
    /**
     * @var Languages
     */
    private Languages $language;

    /**
     * @var string
     */
    private string $learnedWords;

    /**
     * @var string
     */
    private string $untranslatableWords;

    /**
     * @return Languages
     */
    public function getLanguage(): Languages
    {
        return $this->language;
    }

    /**
     * @param Languages $language
     */
    public function setLanguage(Languages $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getLearnedWords(): string
    {
        return $this->learnedWords;
    }

    /**
     * @param string $learnedWords
     */
    public function setLearnedWords(string $learnedWords): void
    {
        $this->learnedWords = $learnedWords;
    }

    /**
     * @return string
     */
    public function getUntranslatableWords(): string
    {
        return $this->untranslatableWords;
    }

    /**
     * @param string $untranslatableWords
     */
    public function setUntranslatableWords(string $untranslatableWords): void
    {
        $this->untranslatableWords = $untranslatableWords;
    }
}