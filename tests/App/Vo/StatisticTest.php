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
    }

    public function testSetMatches()
    {
        $stat = new Statistic();
        $texts = new Texts();

        $texts->setLanguage((new Languages())->setName('english'));
        $texts->setTexts(array(
            'i t g',
            't f k',
            't g l h q w p',
        ));
        $stat->setMatches($texts);
        self::assertSame(10, $stat->getMatches());
    }
}
