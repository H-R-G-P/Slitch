<?php

namespace App\Vo;

use App\Dto\Texts;
use App\Entity\Languages;
use PHPUnit\Framework\TestCase;

class StatisticTest extends TestCase
{
    public function testSetMatchesAll()
    {
        $stat = new Statistic();
        $texts = new Texts();

        $texts->setLanguage((new Languages())->setName('english'));
        $texts->setTexts(array(
            'i t t',
            't f k',
            't g l u',
        ));
        $stat->setMatchesAll($texts);
        self::assertSame(40, $stat->getMatchesAll());

        $texts->setLanguage((new Languages())->setName('english'));
        $texts->setTexts(array(
            'I am danik',
            'I am Tania',
            'i Am Roma',
        ));
        $stat->setMatchesAll($texts);
        self::assertSame(66, $stat->getMatchesAll());
    }

    public function testSetMatches()
    {
        $stat = new Statistic();
        $texts = new Texts();

        $texts->setLanguage((new Languages())->setName('english'));
        $texts->setTexts(array(
            'i t t',
            't f k',
            't g l u j q p',
        ));
        $stat->setMatches($texts);
        self::assertSame(10, $stat->getMatches());

        $texts->setLanguage((new Languages())->setName('english'));
        $texts->setTexts(array(
            'I am danik',
            'I am Tania',
            'i Am Roma',
        ));
        $stat->setMatches($texts);
        self::assertSame(40, $stat->getMatches());
    }
}
