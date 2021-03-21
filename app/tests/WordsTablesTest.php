<?php

use \PHPUnit\Framework\TestCase;

class WordsTablesTest extends TestCase
{
    public function testArray_diff_inLowercase()
    {
        $array1 = array(
            'sTay1',
            'Leave1',
            'STAY2',
            'LEAVE2',
        );
        $array2 = array(
            'leave1',
        );
        $array3 = array(
            'leave2',
        );
        $actual = WordsTables::array_diff_inLowercase($array1, $array2, $array3);
        $expected = array(
            'sTay1',
            'STAY2',
        );
        self::assertSame($expected, $actual);

        $array1 = array(
            new Word('sTay1', ''),
            new Word('Leave1', ''),
            new Word('STAY2', ''),
            new Word('LEAVE2', ''),
        );
        $array2 = array(
            'leave1',
        );
        $array3 = array(
            'leave2',
        );
        $words = WordsTables::array_diff_inLowercase($array1, $array2, $array3);
        self::assertSame('sTay1', "$words[0]");
        self::assertSame('STAY2', "$words[1]");
    }
}