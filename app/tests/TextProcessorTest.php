<?php

use PHPUnit\Framework\TestCase;

class TextProcessorTest extends TestCase
{
    public function testProcessHyphens()
    {
        $processor = new TextProcessor();

        $text = "-----Start";
        $expectedText = "Start";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens in the begin of text."
        );

        $text = "End-----";
        $expectedText = "End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens in the end of text."
        );

        $text = "Start----- End";
        $expectedText = "Start End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens when 1'st of 2 sentences ends with it."
        );

        $text = "Start -----End";
        $expectedText = "Start End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens when 2'nd of 2 sentences begins with it."
        );

        $text = "Start-----End";
        $expectedText = "Start-End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens in a word."
        );

        $text = "Start ----- End";
        $expectedText = "Start End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens between words."
        );
    }

    public function testProcessDots()
    {
        $processor = new TextProcessor();

        $text = ".......Start";
        $expectedText = "Start";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process some dots in the row in the begin of text."
        );

        $text = "Sta.....rt";
        $expectedText = "Start";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process some dots in the row in a word."
        );

        $text = "Start ......End";
        $expectedText = "Start End";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process some dots in the row when 2'nd of 2 sentences begins with it."
        );

        $text = "Start......";
        $expectedText = "Start.";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process many dots in the row in the end of text."
        );

        $text = "Start...... End";
        $expectedText = "Start. End";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process many dots in the row when 1'st of 2 sentences ends with it."
        );
    }

    public function testSplitOnChars()
    {
        $processor = new TextProcessor();

        // Test english
        $text = 'qwertyuiopasdfghjklzxcvbnm';
        $expectedSymbols = array(
            'q', 'w', 'e',
            'r', 't', 'y',
            'u', 'i', 'o',
            'p', 'a', 's',
            'd', 'f', 'g',
            'h', 'j', 'k',
            'l', 'z', 'x',
            'c', 'v', 'b',
            'n', 'm'
        );
        self::assertSame(
            $expectedSymbols,
            $processor->splitOnChars($text),
            "Not correctly split on chars english text."
        );
        // Test polish
        $text = 'aąbcćdeęfghijklłmnńoópqrsśtuvwxyzźż';
        $expectedSymbols = array(
            'a', 'ą', 'b', 'c',
            'ć', 'd', 'e', 'ę',
            'f', 'g', 'h', 'i',
            'j', 'k', 'l', 'ł',
            'm', 'n', 'ń', 'o',
            'ó', 'p', 'q', 'r',
            's', 'ś', 't', 'u',
            'v', 'w', 'x', 'y',
            'z', 'ź', 'ż'
        );
        self::assertSame(
            $expectedSymbols,
            $processor->splitOnChars($text),
            "Not correctly split on chars polish text."
        );
    }
}