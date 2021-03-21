<?php

use PHPUnit\Framework\TestCase;

class WordTest extends TestCase
{
    public function testSetContext()
    {
        $Word = new Word("center", "Start center End");
        self::assertSame(
            "Start <b class='wordsInContext'>center</b> End",
            $Word->getContext()
        );

        $Word = new Word("p", "I will spread your p t .");
        self::assertSame(
            "I will spread your <b class='wordsInContext'>p</b> t .",
            $Word->getContext()
        );
    }
}