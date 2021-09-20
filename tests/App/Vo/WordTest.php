<?php

namespace App\Vo;

use PHPUnit\Framework\TestCase;

class WordTest extends TestCase
{

    public function testSetContext()
    {
        $Word = new Word("center", "Start center End");
        self::assertSame(
            "Start <b class='wordsInContext'>center</b> End",
            $Word->getContext()
        );

        $Word = new Word("p", "I will spread your p t .");
        self::assertSame(
            "I will spread your <b class='wordsInContext'>p</b> t .",
            $Word->getContext()
        );

        $Word = new Word("jesienią", "Mówili, że jak kiedyś jesienią straż pożarna przyjechała to takie błoto było, że się mało nie zakopała.");
        self::assertSame(
            "Mówili, że jak kiedyś <b class='wordsInContext'>jesienią</b> straż pożarna przyjechała to takie błoto było, że się mało nie zakopała.",
            $Word->getContext()
        );
    }
}
