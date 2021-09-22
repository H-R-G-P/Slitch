<?php

namespace App\Tests\Service;

use App\Entity\Languages;
use App\Entity\Stuff;
use App\Repository\LearnedWordsRepository;
use App\Repository\UntranslatableWordsRepository;
use App\Service\Helper;
use App\Service\StuffControllerService;
use PHPUnit\Framework\TestCase;

class StuffControllerServiceTest extends TestCase
{

    public function testGetNotLearnedWordsWithDelimiter()
    {
        $service = new StuffControllerService();
        $text = 'test.';
        $stuff = $this->createStub(Stuff::class);
        $lwr = $this->createStub(LearnedWordsRepository::class);
        $uwr = $this->createStub(UntranslatableWordsRepository::class);
        $helper = $this->createMock(Helper::class);

        $stuff->method('getText')
            ->willReturn($text);
        $stuff->method('getLanguage')
            ->willReturn((new Languages())->setName('english'));
        $stuff->method('getHasDelimiters')
            ->willReturn(true);

        $lwr->method('findAll')
            ->willReturn(['word']);

        $uwr->method('findAll')
            ->willReturn(['word']);

        $helper->expects(self::exactly(0))
            ->method('getContext')
            ->with(
                $this->equalTo($text),
                $this->equalTo('Word')
            );

        $helper->expects(self::once())
            ->method('array_diff_inLowercase')
            ->with(
                self::anything(),
                self::anything()
            )
            ->willReturn(['test']);

        $service->getNotLearnedWords($stuff, $lwr, $uwr, $helper);
    }

    public function testGetNotLearnedWordsWithoutDelimiter()
    {
        $service = new StuffControllerService();
        $text = 'test word.';
        $stuff = $this->createMock(Stuff::class);
        $lwr = $this->createMock(LearnedWordsRepository::class);
        $uwr = $this->createMock(UntranslatableWordsRepository::class);
        $helper = $this->createMock(Helper::class);

        $stuff->method('getText')
            ->willReturn($text);
        $stuff->method('getLanguage')
            ->willReturn((new Languages())->setName('english'));
        $stuff->method('getHasDelimiters')
            ->willReturn(false);

        $lwr->method('findAll')
            ->willReturn(['word']);

        $uwr->method('findAll')
            ->willReturn(['word']);

        $helper->expects(self::once())
            ->method('getContext')
            ->with(
                self::anything(),
                self::anything()
            );

        $helper->expects(self::once())
            ->method('array_diff_inLowercase')
            ->with(
                self::anything(),
                self::anything()
            )
            ->willReturn(['test']);

        $service->getNotLearnedWords($stuff, $lwr, $uwr, $helper);

    }
}
