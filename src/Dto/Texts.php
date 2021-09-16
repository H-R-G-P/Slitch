<?php


namespace App\Dto;


class Texts
{
    /**
     * @var string[]
     */
    private array $texts = [''];

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

    public function resetKeys() : void
    {
        $this->texts = array_values($this->texts);
    }
}