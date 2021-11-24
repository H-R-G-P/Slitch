<?php

namespace Tests\App\Service;

use App\Service\StatisticService;
use PHPUnit\Framework\TestCase;

class StatisticServiceTest extends TestCase
{
    public function testIntersect(): void
    {
        $stat = new StatisticService();

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

    public function testMerge(): void
    {
        $stat = new StatisticService();

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

    public function testGetSum(): void
    {
        $stat = new StatisticService();

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

    public function testCountRepeats(): void
    {
        $stat = new StatisticService();

        $a1 = array(
            't', 't', 'r', 't',
        );

        self::assertSame([
            't' => 3,
            'r' => 1,
        ], $stat->countRepeats($a1));
    }
}
