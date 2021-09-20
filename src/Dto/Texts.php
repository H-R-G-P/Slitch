<?php


namespace App\Dto;


use App\Entity\Languages;

class Texts implements \Countable
{
    /**
     * @var string[]
     */
    private array $texts = [''];

    private Languages $language;

    /**
     * @return string[]
     */
    public function getTexts(): array
    {
        return $this->texts;
    }

    /**
     * @param string[] $texts
     */
    public function setTexts(array $texts): void
    {
        $this->texts = $texts;
    }

    public function addText(string $text): void
    {
        $this->texts[] = $text;
    }

    public function resetKeys() : void
    {
        $this->texts = array_values($this->texts);
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

    public function count(): int
    {
        return count($this->texts);
    }
}