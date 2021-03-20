<?php

use PHPUnit\Framework\TestCase;

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
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens in the begin of text."
        );

        $text = "End-----";
        $expectedText = "End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens in the end of text."
        );

        $text = "Start----- End";
        $expectedText = "Start End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens when 1'st of 2 sentences ends with it."
        );

        $text = "Start -----End";
        $expectedText = "Start End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens when 2'nd of 2 sentences begins with it."
        );

        $text = "Start-----End";
        $expectedText = "Start-End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens in a word."
        );

        $text = "Start ----- End";
        $expectedText = "Start End";
        self::assertSame(
            str_split($expectedText),
            $processor->processHyphens(str_split($text)),
            "Not correctly process some hyphens between words."
        );
    }

    public function testProcessDots()
    {
        $processor = new TextProcessor();

        $text = ".......Start";
        $expectedText = "Start";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process some dots in the row in the begin of text."
        );

        $text = "Sta.....rt";
        $expectedText = "Start";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process some dots in the row in a word."
        );

        $text = "Start ......End";
        $expectedText = "Start End";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process some dots in the row when 2'nd of 2 sentences begins with it."
        );

        $text = "Start......";
        $expectedText = "Start.";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process many dots in the row in the end of text."
        );

        $text = "Start...... End";
        $expectedText = "Start. End";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process many dots in the row when 1'st of 2 sentences ends with it."
        );

        $text = "Start ...... End";
        $expectedText = "Start End";
        self::assertSame(
            str_split($expectedText),
            $processor->processDots(str_split($text)),
            "Not correctly process many dots in the row between words."
        );
    }

    public function testProcessShortWordsWithApostrophe()
    {
        $processor = new TextProcessor();

        $actual = $processor->processShortWordsWithApostrophe(str_split("I'm End"));
        self::assertSame(str_split("I End"), $actual);

        $actual = $processor->processShortWordsWithApostrophe(str_split("Start i'm End"));
        self::assertSame(str_split("Start i End"), $actual);

        $actual = $processor->processShortWordsWithApostrophe(str_split("Start I'm End"));
        self::assertSame(str_split("Start I End"), $actual);

        $actual = $processor->processShortWordsWithApostrophe(str_split("Start I'm."));
        self::assertSame(str_split("Start I."), $actual);

        $actual = $processor->processShortWordsWithApostrophe(str_split("Start. I'm End"));
        self::assertSame(str_split("Start. I End"), $actual);

        $actual = $processor->processShortWordsWithApostrophe(str_split("Start I'm. End"));
        self::assertSame(str_split("Start I. End"), $actual);
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

    public function testRemainAlphabetSpaceMinus()
    {
        $processor = new TextProcessor();

        // Test not processed language
        try {
            $processor->remainAlphabetSpaceMinus("Start", 'notExistingLanguage');
        } catch (Exception $e) {
            self::assertSame(
                "This language (notExistingLanguage) not process in function 'remainAlphabetSpaceMinus()'.",
                $e->getMessage()
            );
        }

        // Test english
        $actual = $processor->remainAlphabetSpaceMinus("@#~`':;|><,?=][}{St!@$^%#%564+_)(**&&^^%\\//-art.# %%#E564nd#$%765", 'english');
        self::assertSame("St-art End", $actual);

        $actual = $processor->remainAlphabetSpaceMinus("StartйцукенгшщзхъфывапролджэячсмитьбюЁёЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ. End", 'english');
        self::assertSame("Start End", $actual);

        $actual = $processor->remainAlphabetSpaceMinus("StartąćęłńóśźżĄĆĘŁŃÓŚŹŻ. End", 'english');
        self::assertSame("Start End", $actual);

        // Test polish
        $actual = $processor->remainAlphabetSpaceMinus("@#~`':;|><,?=][}{St!@$^%#%564+_)(**&&^^%\\//-art.# %%#E564nd#$%765", 'polish');
        self::assertSame("St-art End", $actual);

        $actual = $processor->remainAlphabetSpaceMinus("StartйцукенгшщзхъфывапролджэячсмитьбюЁёЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ. End", 'polish');
        self::assertSame("Start End", $actual);

        $actual = $processor->remainAlphabetSpaceMinus("StartąćęłńóśźżĄĆĘŁŃÓŚŹŻ. End", 'polish');
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
}