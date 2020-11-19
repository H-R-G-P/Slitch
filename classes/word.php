<?php


namespace classes;


class word
{
    /**
     * @var string Main word.
     */
    private $word;

    /**
     * @var string A few words to the left and right of the main word.
     */
    private $context;

    public function __construct($word, $context)
    {
        $this->word = $word;
        $this->context = $context;
    }

    public function __toString()
    {
        return $this->word;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Create string for printing from word's properties.
     * @return string 'html checkbox' + 'word' + 'context of word'.
     */
    public function toCheckbox()
    {
        return "<input type='checkbox' name='{$this->word}'>{$this->word}   {$this->context}<br>";
    }
}