<?php

namespace Tests\App\Vo;

use App\Dto\Texts;
use App\Entity\Languages;
use App\Vo\Repetition;
use PHPUnit\Framework\TestCase;

class RepetitionTest extends TestCase
{

    public function testSetRepetition(): void
    {
        $repetition = new Repetition();
        $texts = new Texts();

        $texts->setLanguage((new Languages())->setName('english'));

        $texts->addText('I love you too, hej hej hej!');
        $texts->addText('I see you what about me, hej hej hej!');
        $texts->addText('I see you how you feel, oh jej!');

        $repetition->setRepetition($texts);

        self::assertSame(1, $repetition->getRare());
        self::assertSame(2, $repetition->getAverage());
        self::assertSame(1, $repetition->getFrequent());
    }
}
