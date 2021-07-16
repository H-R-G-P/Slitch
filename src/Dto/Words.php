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
     * @var string|null
     */
    private ?string $learnedWords = null;

    /**
     * @var string|null
     */
    private ?string $untranslatableWords = null;

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
     * @return string|null
     */
    public function getLearnedWords(): ?string
    {
        return $this->learnedWords;
    }

    /**
     * @param string|null $learnedWords
     */
    public function setLearnedWords(?string $learnedWords): void
    {
        $this->learnedWords = $learnedWords;
    }

    /**
     * @return string|null
     */
    public function getUntranslatableWords(): ?string
    {
        return $this->untranslatableWords;
    }

    /**
     * @param string|null $untranslatableWords
     */
    public function setUntranslatableWords(?string $untranslatableWords): void
    {
        $this->untranslatableWords = $untranslatableWords;
    }
}