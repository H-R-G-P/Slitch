<?php


class Word
{
    /**
     * @var string Main word.
     */
    private string $word;

    /**
     * @var string A few words to the left and right of the main word.
     */
    private string $context;

    public function __construct(string $word, string $context)
    {
        $this->word = $word;
        $this->context = trim($context);
    }

    public function __toString(): string
    {
        return $this->word;
    }

    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
}