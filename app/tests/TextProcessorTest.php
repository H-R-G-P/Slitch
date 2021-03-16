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
    }
}