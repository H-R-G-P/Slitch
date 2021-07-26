<?php


namespace App\Vo;


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
    {// TODO Сделать лимит 330 символов в сумме по левую и правую стороны от ключевого слова.
        $result = preg_replace(
            '/\b'.$word.'\b/u',
            "<b class='wordsInContext'>$word</b>",
            $context,
            1
        );
        if (is_string($result)) {
            $this->context = $result;
        }
    }

    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
}