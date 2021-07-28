<?php


namespace App\Service;


use App\Dto\TextInfo;
use Exception;
use App\Vo\Word;

class TextProcessor
{
    /**
     * @param string $text
     * @param string $language
     *
     * @return TextInfo
     *
     * @throws Exception
     */
    public function getInfo(string $text, string $language) : TextInfo
    {
        $handledText = $this->clean($text, $language);
        $words = explode(' ', $handledText);
        $uniqWords = array_unique($words);

        $textInfo = new TextInfo();
        $textInfo->setWords($handledText);
        $textInfo->setWordCount(count($words));
        $textInfo->setUniqWordCount(count($uniqWords));

        return $textInfo;
    }

    /**
     * Remain words separated spaces.
     * @param string $text
     * @param string $language
     * @return string Processed text
     * @throws Exception
     */
    public function clean(string $text, string $language) : string
	{
		$text = $this->processEnter($text);

		$text = $this->processDots($text);

		$text = $this->processBraked($text);

		$text = $this->processShortWordsWithApostrophe($text);

		$text = $this->processWhitespaces($text);

		$text = $this->processSpaces($text);

		$text = $this->processHyphens($text);

		$text = $this->remainAlphabetSpacesHyphens($text, $language);

		return $text;
	}

    /**
     * Correct delete "\n".
     * @param string $text
     * @return string Processed text
     */
    public function processEnter(string $text) : string
	{
		$pattern = array(
                '/(\w)\n+(\w)/',
                '/^\n+(\w)/',
                '/\n+(\w)/',
                '/(\w)\n+/',
                '/(\s)\n+(\s)/',
                '/\n+(\s)/',
                '/(\s)\n+/'
            );
        $replacement = array(
                '$1 $2',
                '$1',
                '$1',
                '$1',
                '$1',
                '$1',
                '$1',
            );
        return preg_replace($pattern, $replacement, $text);
	}

    /**
     * Correct delete spaces.
     * @param string $text
     * @return string Processed text
     */
    public function processSpaces(string $text) : string
	{
		$pattern = array(
                '/^\s+/',
                '/\s+$/',
                '/\s+([.!?])/',
                '/\s+/',
            );
        $replacement = array(
                '',
                '',
                '$1',
                ' ',
            );
        return preg_replace($pattern, $replacement, $text);
	}

    /**
     * Correctly delete "-".
     * @param string $text
     * @return string Processed text
     */
    public function processHyphens(string $text) : string
    {
        $pattern = array(
                '/^-+(\w)/',
                '/(\w)-+$/',
                '/(\W)-+(\w)/',
                '/(\w)-+(\W)/',
                '/(\w)-+(\w)/',
                '/\s+-+\s+/'
            );
        $replacement = array(
                '$1',
                '$1',
                '$1$2',
                '$1$2',
                '$1-$2',
                ' '
            );
        return preg_replace($pattern, $replacement, $text);
    }

    /**
     * Correctly delete some (1 - infinity) dots in the row.
     * @param string $text
     * @return string Processed text
     */
    public function processDots(string $text) : string
    {
        $pattern = array(
                '/^\.+(\w)/',
                '/(\w)\.+$/',
                '/(\W)\.+(\w)/',
                '/(\w)\.+(\W)/',
                '/(\w)\.+(\w)/',
                '/\s+\.+\s+/'
            );
        $replacement = array(
                '$1',
                '$1.',
                '$1$2',
                '$1.$2',
                '$1$2',
                ' '
            );
        return preg_replace($pattern, $replacement, $text);
    }

    /**
     * Correct delete abbreviations with apostrophe.
     * @param string $text
     * @return string Processed text
     */
    public function processShortWordsWithApostrophe(string $text) : string
	{
        $text = preg_replace('/(\b)won\'t(\b)/', '$1will$2', $text);
	    $pattern = array(
                '/(\w)\'m/',
                '/(\w)\'re/',
                '/(\w)\'s/',
                '/(\w)\'ll/',
                '/(\w)n\'t/',
                '/(\w)\'d/',
                '/(\w)\'ve/',
                '/(\w)\'\s/',
            );
        $replacement = array(
                '$1',
                '$1',
                '$1',
                '$1',
                '$1',
                '$1',
                '$1',
                '$1 ',
            );
        return preg_replace($pattern, $replacement, $text);
	}

    /**
     * Find all '. ', '! ', '? ' and change " " to "\n" then return updated text.
     * Last sentence don't marking.
     * @param string $text
     * @return string
     */
    public function markEndsOfSentences(string $text) : string
    {
        $symbols = $this->splitOnChars($text);
        for ($i=0, $size = count($symbols); $i < $size; $i++) {
			if ($symbols[$i] === "." ||
                $symbols[$i] === "?" ||
                $symbols[$i] === "!")
			{
				if (array_key_exists($i+1, $symbols) &&
                    $symbols[$i+1] === " ")
				{
					$symbols[$i+1] = "\n";
				}
			}
		}
        return implode("", $symbols);
	}

    public function remainAlphabetSpacesHyphens(string $text, string $language) : string
    {
        if ($language === 'english')
        {
            return preg_replace("/[^a-zA-Z\s-]+/", '', $text);
        }
        elseif ($language === 'polish')
        {
            $symbols = $this->splitOnChars($text);
            $symbols = array_filter($symbols, function ($value){
                return preg_match("/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ\s-]+$/", $value);
            });
            return implode('', $symbols);
        }
        else
        {
            throw new Exception("This language ($language) not process in function 'remainAlphabetSpaceMinus()'.");
        }
	}

    /**
     * Correct delete braked.
     * @param string $text
     * @return string Processed text
     */
    public function processBraked(string $text) : string
	{
        $pattern = array(
                '/^[\(\)]+(\w)/',
                '/(\w)[\(\)]+$/',
                '/(\w)[\(\)]+([$.!?])/',
                '/[\(\)]\s/',
                '/\s[\(\)]/',
                '/[\(\)]+(\w)/',
                '/(\w)[\(\)]+/'
            );
        $replacement = array(
                '$1',
                '$1',
                '$1$2',
                ' ',
                ' ',
                ' $1',
                '$1 '
            );
        return preg_replace($pattern, $replacement, $text);
	}

    /**
     * Correct delete "_".
     * @param string $text
     * @return string Processed text
     */
    public function processWhitespaces(string $text) : string
	{
        $pattern = array(
                '/^_+(\w)/',
                '/(\w)_+$/',
                '/(\w)_+([$.!?])/',
                '/_\s/',
                '/\s_/',
                '/_+(\w)/',
                '/(\w)_+/'
            );
        $replacement = array(
                '$1',
                '$1',
                '$1$2',
                ' ',
                ' ',
                ' $1',
                '$1 '
            );
        return preg_replace($pattern, $replacement, $text);
	}

    /**
     * @param string $string
     * @return array|false|string[]
     */
    public function splitOnChars(string $string)
    {
        mb_regex_encoding('UTF-8');
        mb_internal_encoding("UTF-8");
        return preg_split('/(?<!^)(?!$)/u', $string);
	}

    /**
     * @param string $text
     * @param string $language
     * @return string[]
     * @throws Exception
     */
    public function getWords(string $text, string $language) : array
    {
        return explode(" ", $this->clean($text, $language));
	}

    /**
     * @param string $text
     * @param string $language
     * @return Word[]
     * @throws Exception
     */
    public function getWordsObj(string $text, string $language) : array
    {
        $sentences = $this->getSentences($text);
        $words = [];
        foreach ($sentences as $sentence) {
            $wordsInSent = $this->getWords($sentence, $language);
            foreach ($wordsInSent as $word) {
                $words[] = new Word($word, $sentence);
            }
        }
        return $words;
	}

    /**
     * @param string $text
     * @param string $language
     * @return string[]
     * @throws Exception
     */
    public function getUniqWords(string $text, string $language): array
    {
        return Helper::array_uniqueCaseInsensitive($this->getWords($text, $language));
    }

    /**
     * @param string $text
     * @param string $language
     * @return Word[]
     * @throws Exception
     */
    public function getUniqWordsObj(string $text, string $language): array
    {
        return Helper::array_uniqueCaseInsensitive($this->getWordsObj($text, $language));
    }

    /**
     * Split text on sentences.
     * End of sentence detect with symbol - "\n".
     * @param string $text
     * @return string[] Sentences
     */
    public function getSentences(string $text) : array
    {
        $text = $this->processEnter($text);
        $text = $this->processSpaces($text);
        $text = $this->markEndsOfSentences($text);
        return explode("\n", $text);
    }
}