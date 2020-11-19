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
}