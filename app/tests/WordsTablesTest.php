<?php

use \PHPUnit\Framework\TestCase;

class WordsTablesTest extends TestCase
{
    public function testGetNotLearnedWordsFrom()
    {
        define('DB_HOST', 'localhost');
        define('DB_USER', 'slitch');
        define('DB_PASS', 'slitch-psw');
        define('DB_NAME', 'slitch');
        $word = new WordsTables();

        self::assertSame(['sds'], $word->getNotLearnedWordsFrom(['sds', 'on'], 'english'));
    }
}