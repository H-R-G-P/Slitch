<?php


namespace App\Dto;

use App\Entity\Languages;

class Text
{
    private string $text;

    private Languages $language;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

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
}