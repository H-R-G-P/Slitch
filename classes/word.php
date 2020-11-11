<?php


namespace classes;


class word
{
    /**
     * @var string Main word.
     */
    private string $word;

    /**
     * @var string A few words to the left and right of the main word.
     */
    private string $context;
}