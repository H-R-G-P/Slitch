<?php

namespace App\Service;

use Exception;
use PHPUnit\Framework\TestCase;
use App\Vo\Word;

class TextProcessorTest extends TestCase
{
    public function testProcessEnter()
    {
        $processor = new TextProcessor();

        $actual = $processor->processEnter("\nStart End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processEnter("\n\n\n\nStart End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processEnter("Start\nEnd");
        self::assertSame("Start End", $actual);

        $actual = $processor->processEnter("Start\n\n\n\nEnd");
        self::assertSame("Start End", $actual);

        $actual = $processor->processEnter("Start. \nEnd");
        self::assertSame("Start. End", $actual);

        $actual = $processor->processEnter("Start. \n\n\n\nEnd");
        self::assertSame("Start. End", $actual);

        $actual = $processor->processEnter("Start! \nEnd");
        self::assertSame("Start! End", $actual);

        $actual = $processor->processEnter("Start! \n\n\n\nEnd");
        self::assertSame("Start! End", $actual);

        $actual = $processor->processEnter("Start? \nEnd");
        self::assertSame("Start? End", $actual);

        $actual = $processor->processEnter("Start? \n\n\n\nEnd");
        self::assertSame("Start? End", $actual);

        $actual = $processor->processEnter("Start \nEnd");
        self::assertSame("Start End", $actual);

        $actual = $processor->processEnter("Start \n\n\n\nEnd");
        self::assertSame("Start End", $actual);

        $actual = $processor->processEnter("Start\n End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processEnter("Start\n\n\n\n End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processEnter("Start\n. End");
        self::assertSame("Start. End", $actual);

        $actual = $processor->processEnter("Start\n\n\n\n. End");
        self::assertSame("Start. End", $actual);

        $actual = $processor->processEnter("Start\n! End");
        self::assertSame("Start! End", $actual);

        $actual = $processor->processEnter("Start\n\n\n\n! End");
        self::assertSame("Start! End", $actual);

        $actual = $processor->processEnter("Start\n? End");
        self::assertSame("Start? End", $actual);

        $actual = $processor->processEnter("Start\n\n\n\n? End");
        self::assertSame("Start? End", $actual);

        $actual = $processor->processEnter("Start End\n");
        self::assertSame("Start End", $actual);

        $actual = $processor->processEnter("Start End\n\n\n\n");
        self::assertSame("Start End", $actual);
    }

    public function testProcessSpaces()
    {
        $processor = new TextProcessor();

        $actual = $processor->processSpaces(" Start End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processSpaces("    Start End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processSpaces("Start End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processSpaces("Start    End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processSpaces("Start.  End");
        self::assertSame("Start. End", $actual);

        $actual = $processor->processSpaces("Start.     End");
        self::assertSame("Start. End", $actual);

        $actual = $processor->processSpaces("Start!  End");
        self::assertSame("Start! End", $actual);

        $actual = $processor->processSpaces("Start!     End");
        self::assertSame("Start! End", $actual);

        $actual = $processor->processSpaces("Start?  End");
        self::assertSame("Start? End", $actual);

        $actual = $processor->processSpaces("Start?     End");
        self::assertSame("Start? End", $actual);

        $actual = $processor->processSpaces("Start  End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processSpaces("Start     End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processSpaces("Start  End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processSpaces("Start     End");
        self::assertSame("Start End", $actual);

        $actual = $processor->processSpaces("Start . End");
        self::assertSame("Start. End", $actual);

        $actual = $processor->processSpaces("Start    . End");
        self::assertSame("Start. End", $actual);

        $actual = $processor->processSpaces("Start ! End");
        self::assertSame("Start! End", $actual);

        $actual = $processor->processSpaces("Start    ! End");
        self::assertSame("Start! End", $actual);

        $actual = $processor->processSpaces("Start ? End");
        self::assertSame("Start? End", $actual);

        $actual = $processor->processSpaces("Start    ? End");
        self::assertSame("Start? End", $actual);

        $actual = $processor->processSpaces("Start End ");
        self::assertSame("Start End", $actual);

        $actual = $processor->processSpaces("Start End    ");
        self::assertSame("Start End", $actual);
    }

    public function testProcessHyphens()
    {
        $processor = new TextProcessor();

        $text = "-----Start";
        $expectedText = "Start";
        self::assertSame(
            $expectedText,
            $processor->processHyphens($text),
            "Not correctly process some hyphens in the begin of text."
        );

        $text = "End-----";
        $expectedText = "End";
        self::assertSame(
            $expectedText,
            $processor->processHyphens($text),
            "Not correctly process some hyphens in the end of text."
        );

        $text = "Start----- End";
        $expectedText = "Start End";
        self::assertSame(
            $expectedText,
            $processor->processHyphens($text),
            "Not correctly process some hyphens when 1'st of 2 sentences ends with it."
        );

        $text = "Start -----End";
        $expectedText = "Start End";
        self::assertSame(
            $expectedText,
            $processor->processHyphens($text),
            "Not correctly process some hyphens when 2'nd of 2 sentences begins with it."
        );

        $text = "Start-----End";
        $expectedText = "Start-End";
        self::assertSame(
            $expectedText,
            $processor->processHyphens($text),
            "Not correctly process some hyphens in a word."
        );

        $text = "Start ----- End";
        $expectedText = "Start End";
        self::assertSame(
            $expectedText,
            $processor->processHyphens($text),
            "Not correctly process some hyphens between words."
        );

        $text = "+7-926-378-2946";
        $expectedText = "+79263782946";
        self::assertSame(
            $expectedText,
            $processor->processHyphens($text),
            "Not correctly process phone numbers with hyphens."
        );
    }

    public function testProcessDots()
    {
        $processor = new TextProcessor();

        $text = ".......Start";
        $expectedText = "Start";
        self::assertSame(
            $expectedText,
            $processor->processDots($text),
            "Not correctly process some dots in the row in the begin of text."
        );

        $text = "Sta.....rt";
        $expectedText = "Start";
        self::assertSame(
            $expectedText,
            $processor->processDots($text),
            "Not correctly process some dots in the row in a word."
        );

        $text = "Start ......End";
        $expectedText = "Start End";
        self::assertSame(
            $expectedText,
            $processor->processDots($text),
            "Not correctly process some dots in the row when 2'nd of 2 sentences begins with it."
        );

        $text = "Start......";
        $expectedText = "Start.";
        self::assertSame(
            $expectedText,
            $processor->processDots($text),
            "Not correctly process many dots in the row in the end of text."
        );

        $text = "Start...... End";
        $expectedText = "Start. End";
        self::assertSame(
            $expectedText,
            $processor->processDots($text),
            "Not correctly process many dots in the row when 1'st of 2 sentences ends with it."
        );

        $text = "Start ...... End";
        $expectedText = "Start End";
        self::assertSame(
            $expectedText,
            $processor->processDots($text),
            "Not correctly process many dots in the row between words."
        );
    }

    public function testProcessShortWordsWithApostrophe()
    {
        $processor = new TextProcessor();

        $actual = $processor->processShortWordsWithApostrophe("I'm End");
        self::assertSame("I End", $actual);

        $actual = $processor->processShortWordsWithApostrophe("you're End");
        self::assertSame("you End", $actual);

        $actual = $processor->processShortWordsWithApostrophe("It's End");
        self::assertSame("It End", $actual);

        $actual = $processor->processShortWordsWithApostrophe("we'll End");
        self::assertSame("we End", $actual);

        $actual = $processor->processShortWordsWithApostrophe("didn't End");
        self::assertSame("did End", $actual);

        $actual = $processor->processShortWordsWithApostrophe("He'd End");
        self::assertSame("He End", $actual);

        $actual = $processor->processShortWordsWithApostrophe("I've End");
        self::assertSame("I End", $actual);

        $actual = $processor->processShortWordsWithApostrophe("I' End");
        self::assertSame("I End", $actual);

        $actual = $processor->processShortWordsWithApostrophe("won't End");
        self::assertSame("will End", $actual);
    }

    public function testMarkEndsOfSentences()
    {
        $processor = new TextProcessor();

        $actual = $processor->markEndsOfSentences("Start. End");
        self::assertSame("Start.\nEnd", $actual);

        $actual = $processor->markEndsOfSentences("End.");
        self::assertSame("End.", $actual);

        $actual = $processor->markEndsOfSentences("Start! End");
        self::assertSame("Start!\nEnd", $actual);

        $actual = $processor->markEndsOfSentences("End!");
        self::assertSame("End!", $actual);

        $actual = $processor->markEndsOfSentences("Start? End");
        self::assertSame("Start?\nEnd", $actual);

        $actual = $processor->markEndsOfSentences("End?");
        self::assertSame("End?", $actual);
    }

    public function testRemainAlphabetSpacesHyphens()
    {
        $processor = new TextProcessor();

        // Test not processed language
        try {
            $processor->remainAlphabetSpacesHyphens("Start", 'notExistingLanguage');
        } catch (Exception $e) {
            self::assertSame(
                "This language (notExistingLanguage) not process in function 'remainAlphabetSpaceMinus()'.",
                $e->getMessage()
            );
        }

        // Test english
        $actual = $processor->remainAlphabetSpacesHyphens("@#~`':;|><,?=][}{St!@$^%#%564+_)(**&&^^%\\//-art.# %%#E564nd#$%765", 'english');
        self::assertSame("St-art End", $actual);

        $actual = $processor->remainAlphabetSpacesHyphens("StartйцукенгшщзхъфывапролджэячсмитьбюЁёЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ. End", 'english');
        self::assertSame("Start End", $actual);

        $actual = $processor->remainAlphabetSpacesHyphens("StartąćęłńóśźżĄĆĘŁŃÓŚŹŻ. End", 'english');
        self::assertSame("Start End", $actual);

        // Test polish
        $actual = $processor->remainAlphabetSpacesHyphens("@#~`':;|><,?=][}{St!@$^%#%564+_)(**&&^^%\\//-art.# %%#E564nd#$%765", 'polish');
        self::assertSame("St-art End", $actual);

        $actual = $processor->remainAlphabetSpacesHyphens("StartйцукенгшщзхъфывапролджэячсмитьбюЁёЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ. End", 'polish');
        self::assertSame("Start End", $actual);

        $actual = $processor->remainAlphabetSpacesHyphens("StartąćęłńóśźżĄĆĘŁŃÓŚŹŻ. End", 'polish');
        self::assertSame("StartąćęłńóśźżĄĆĘŁŃÓŚŹŻ End", $actual);
    }

    public function testProcessBraked()
    {
        $processor = new TextProcessor();

        $actual = $processor->processBraked("(something) End");
        self::assertSame("something End", $actual);

        $actual = $processor->processBraked("Start(something).");
        self::assertSame("Start something.", $actual);

        $actual = $processor->processBraked("Start(something)!");
        self::assertSame("Start something!", $actual);

        $actual = $processor->processBraked("Start(something)?");
        self::assertSame("Start something?", $actual);

        $actual = $processor->processBraked("Start(something)");
        self::assertSame("Start something", $actual);

        $actual = $processor->processBraked("Start(something) End");
        self::assertSame("Start something End", $actual);

        $actual = $processor->processBraked("Start (something) End");
        self::assertSame("Start something End", $actual);

        $actual = $processor->processBraked("Start (something)End");
        self::assertSame("Start something End", $actual);

        $actual = $processor->processBraked("Start(something). End");
        self::assertSame("Start something. End", $actual);

        $actual = $processor->processBraked("Start(something)! End");
        self::assertSame("Start something! End", $actual);

        $actual = $processor->processBraked("Start(something)? End");
        self::assertSame("Start something? End", $actual);

        $actual = $processor->processBraked("Start. (something) End");
        self::assertSame("Start. something End", $actual);
    }

    public function testProcessWhitespaces()
    {
        $processor = new TextProcessor();

        $actual = $processor->processWhitespaces("_something End");
        self::assertSame("something End", $actual);

        $actual = $processor->processWhitespaces("Start something_.");
        self::assertSame("Start something.", $actual);

        $actual = $processor->processWhitespaces("Start something_!");
        self::assertSame("Start something!", $actual);

        $actual = $processor->processWhitespaces("Start something_?");
        self::assertSame("Start something?", $actual);

        $actual = $processor->processWhitespaces("Start something_");
        self::assertSame("Start something", $actual);

        $actual = $processor->processWhitespaces("Start_something End");
        self::assertSame("Start something End", $actual);

        $actual = $processor->processWhitespaces("Start _something_ End");
        self::assertSame("Start something End", $actual);

        $actual = $processor->processWhitespaces("Start something_End");
        self::assertSame("Start something End", $actual);

        $actual = $processor->processWhitespaces("Start something_. End");
        self::assertSame("Start something. End", $actual);

        $actual = $processor->processWhitespaces("Start something_! End");
        self::assertSame("Start something! End", $actual);

        $actual = $processor->processWhitespaces("Start something_? End");
        self::assertSame("Start something? End", $actual);

        $actual = $processor->processWhitespaces("Start. _something End");
        self::assertSame("Start. something End", $actual);
    }

    public function testSplitOnChars()
    {
        $processor = new TextProcessor();

        // Test english
        $text = 'qwertyuiopasdfghjklzxcvbnm';
        $expectedSymbols = array(
            'q', 'w', 'e',
            'r', 't', 'y',
            'u', 'i', 'o',
            'p', 'a', 's',
            'd', 'f', 'g',
            'h', 'j', 'k',
            'l', 'z', 'x',
            'c', 'v', 'b',
            'n', 'm'
        );
        self::assertSame(
            $expectedSymbols,
            $processor->splitOnChars($text),
            "Not correctly split on chars english text."
        );
        // Test polish
        $text = 'aąbcćdeęfghijklłmnńoópqrsśtuvwxyzźż';
        $expectedSymbols = array(
            'a', 'ą', 'b', 'c',
            'ć', 'd', 'e', 'ę',
            'f', 'g', 'h', 'i',
            'j', 'k', 'l', 'ł',
            'm', 'n', 'ń', 'o',
            'ó', 'p', 'q', 'r',
            's', 'ś', 't', 'u',
            'v', 'w', 'x', 'y',
            'z', 'ź', 'ż'
        );
        self::assertSame(
            $expectedSymbols,
            $processor->splitOnChars($text),
            "Not correctly split on chars polish text."
        );
    }

    public function testGetWords()
    {
        $processor = new TextProcessor();

        // Test english
        $actual = $processor->getWords("Start something. Start something End!", 'english');
        self::assertSame(['Start','something','Start','something','End'], $actual);

        // Test polish
        $actual = $processor->getWords("Start coś tu zostanie napisane. Start Jeśli End?", 'polish');
        self::assertSame(['Start','coś','tu','zostanie','napisane','Start','Jeśli','End'], $actual);
    }

    public function testGetWordsObj()
    {
        $processor = new TextProcessor();

        // Test english
        $words = $processor->getWordsObj("Start something. Start something End!", 'english');
        self::assertCount(5, $words);
        self::assertContainsOnlyInstancesOf(Word::class, $words);

        // Test polish
        $words = $processor->getWordsObj("Start coś tu zostanie napisane. Start Jeśli End?", 'polish');
        self::assertCount(8, $words);
        self::assertContainsOnlyInstancesOf(Word::class, $words);
    }

    public function testGetUniqWords()
    {
        $processor = new TextProcessor();

        // Test english
        $actual = $processor->getUniqWords("Start something. Start something End!", 'english');
        self::assertSame(['Start','something','End'], $actual);

        $actual = $processor->getUniqWords("Start something. start Something End!", 'english');
        self::assertSame(['Start','something','End'], $actual);

        // Test polish
        $actual = $processor->getUniqWords("Start coś tu zostanie napisane. Start Jeśli End?", 'polish');
        self::assertSame(['Start','coś','tu','zostanie','napisane','Jeśli','End'], $actual);
    }

    public function testGetUniqWordsObj()
    {
        $processor = new TextProcessor();

        // Test english
        $words = $processor->getUniqWordsObj("Start something. Start something End!", 'english');
        self::assertSame('Start', "$words[0]");
        self::assertSame('something', "$words[1]");
        self::assertSame('End', "$words[2]");

        $words = $processor->getUniqWordsObj("Start something. start Something End!", 'english');
        self::assertSame('Start', "$words[0]");
        self::assertSame('something', "$words[1]");
        self::assertSame('End', "$words[2]");

        // Test polish
        $words = $processor->getUniqWordsObj("Start coś tu zostanie napisane. Start Jeśli End?", 'polish');
        self::assertSame('Start', "$words[0]");
        self::assertSame('coś', "$words[1]");
        self::assertSame('tu', "$words[2]");
        self::assertSame('zostanie', "$words[3]");
        self::assertSame('napisane', "$words[4]");
        self::assertSame('Jeśli', "$words[5]");
        self::assertSame('End', "$words[6]");
    }

    public function testGetSentences()
    {
        $processor = new TextProcessor();

        $sentences = $processor->getSentences("Start something. Start something End!");
        self::assertSame('Start something.', "$sentences[0]");
        self::assertSame('Start something End!', "$sentences[1]");
    }
}
