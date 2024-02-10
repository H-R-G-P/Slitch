<?php

namespace App\Tests\Service;

use App\Entity\Stuff;
use App\Service\FilterService;
use App\Service\Helper;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;

class FilterServiceTest extends TestCase
{

    public function testGetNotLearnWords()
    {
//        $helper = $this->createMock(Helper::class);
        $em = $this->createMock(EntityManager::class);
        $stuff = $this->createStub(Stuff::class);
        $service = new FilterService($em, $stuff);

        $actual = $service->getNotLearnWords();
        $expected = [];

        self::assertEquals($expected, $actual);
    }
}
