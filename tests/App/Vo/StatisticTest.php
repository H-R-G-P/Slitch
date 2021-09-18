<?php

namespace App\Vo;

use App\Dto\Texts;
use App\Entity\Languages;
use PHPUnit\Framework\TestCase;

class StatisticTest extends TestCase
{

    public function testIntersect()
    {
        $stat = new Statistic();

        $actual = $stat->intersect(array(
            ['i', 't', 'g'],
            ['t', 'f', 'k'],
            ['t', 'g', 'l'],
        ));
        self::assertSame([1 => 't'], $actual);

        $actual = $stat->intersect(array(
            ['i', 't', 't'],
            ['t', 'g', 'k'],
            ['t', 'g', 'l'],
        ));
        self::assertSame([1 => 't'], $actual);
    }

    public function testMerge()
    {
        $stat = new Statistic();

        $a1 = array(
            'i' => 1,
        );
        $a2 = array(
            't' => 3,
            'f' => 2,
        );
        $act = $stat->merge($a1, $a2);
        self::assertSame(array(
            'i' => 1,
            't' => 3,
            'f' => 2,
        ), $act);
    }

    public function testGetSum()
    {
        $stat = new Statistic();

        $a2 = array(
            't' => 3,
            'f' => 2,
            'g' => 1,
            'l' => 32,
        );
        $a1 = array(
            't', 'l',
        );
        self::assertSame(35, $stat->getSum($a2, $a1));
    }

    public function testCountRepeats()
    {
        $stat = new Statistic();

        $a1 = array(
            't', 't', 'r', 't',
        );

        self::assertSame([
            't' => 3,
            'r' => 1,
        ], $stat->countRepeats($a1));
    }

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
