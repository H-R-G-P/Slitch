<?php

namespace Tests\App\Vo;

use App\Dto\Texts;
use App\Entity\Languages;
use App\Vo\Statistic;
use Exception;
use PHPUnit\Framework\TestCase;

class StatisticTest extends TestCase
{
    public function testSetMatchesAll(): void
    {
        $stat = new Statistic();
        $texts = new Texts();

        $texts->setLanguage((new Languages())->setName('english'));
        $texts->setTexts(array(
            'i t t',
            't f k',
            't g l u',
        ));
        try {
            $stat->setMatchesAllPerc($texts);
        } catch (Exception $e) {
            self::assertSame(1, 0, $e->getMessage());
        }
        self::assertSame(40, $stat->getMatchesAllPerc());

        $texts->setLanguage((new Languages())->setName('english'));
        $texts->setTexts(array(
            'I am danik',
            'I am Tania',
            'i Am Roma',
        ));
        try {
            $stat->setMatchesAllPerc($texts);
        } catch (Exception $e) {
            self::assertSame(1, 0, $e->getMessage());
        }
        self::assertSame(66, $stat->getMatchesAllPerc());
    }

    public function testSetMatches(): void
    {
        $stat = new Statistic();
        $texts = new Texts();

        $texts->setLanguage((new Languages())->setName('english'));
        $texts->setTexts(array(
            'i t t',
            't f k',
            't g l u j q p',
        ));
        try {
            $stat->setMatchesPerc($texts);
        } catch (Exception $e) {
            self::assertSame(1, 0, $e->getMessage());
        }
        self::assertSame(10, $stat->getMatchesPerc());

        $texts->setLanguage((new Languages())->setName('english'));
        $texts->setTexts(array(
            'I am danik',
            'I am Tania',
            'i Am Roma',
        ));
        try {
            $stat->setMatchesPerc($texts);
        } catch (Exception $e) {
            self::assertSame(1, 0, $e->getMessage());
        }
        self::assertSame(40, $stat->getMatchesPerc());
    }
}
