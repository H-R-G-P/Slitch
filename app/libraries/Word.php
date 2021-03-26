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
        $this->setContext($word, $context);
    }

    public function __toString(): string
    {
        return $this->word;
    }

    public function setContext(string $word, string $context)
    {
        $this->context = preg_replace(
            '/\b'.$word.'\b/u',
            "<b class='wordsInContext'>$word</b>",
            $context,
            1
        );
    }

    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
}