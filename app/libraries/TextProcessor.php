<?php


class TextProcessor
{
    /**
     * @var array
     */
    private array $sentences = [];
    /**
     * @var array
     */
    private array $words = [];
    /**
     * @var array
     */
    private array $uniqWords = [];
    /**
     * Array of symbols in lowercase.
     * @var array
     */
    private array $symbols;
    /** Language of text that processing.
     * @var string Short name of language.
     */
    private string $lang;

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
     * Inserts full words instead of abbreviations.
     * @param string $text
     * @return string Processed text
     */
    public function processShortWordsWithApostrophe(string $text) : string
	{
        $text = preg_replace('/(\b)won\'t(\b)/', '$1will not$2', $text);
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
                '$1 am',
                '$1 are',
                '$1 is',
                '$1 will',
                '$1 not',
                '$1 had',
                '$1 have',
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
     * Reset key in array of symbols.
     */
    private function resetKeys()
    {
        $this->symbols = array_values($this->symbols);
	}

    public function splitOnChars(string $string)
    {
        mb_regex_encoding('UTF-8');
        mb_internal_encoding("UTF-8");
        return preg_split('/(?<!^)(?!$)/u', $string);
	}

    /**
     * Remove symbols from got $key to first space included.
     * Iterates over the keys decreasing it with each recursive call.
     * The first space encountered will be removed.
     * @param array $symbols Array of symbols.
     * @param int $key Key from start.
     * @return array Modified $symbols.
     */
    private function removePrevSymbolsToSpace(array $symbols, int $key) : array
    {
        if (!isset($symbols[$key])) return $symbols;
        elseif ($symbols[$key] === " ") {
            unset($symbols[$key]);
            return $symbols;
        }else {
            unset($symbols[$key]);
            return $this->removePrevSymbolsToSpace($symbols, $key-1);
        }
    }

    /**
     * Split $symbols on sentences.
     * End of sentence detect with symbol - "\n". Before use this function
     * execute functions:
     * <ul>
     *      <li>processEnter()</li>
     *      <li>processLastSpace()</li>
     *      <li>processSomeSpaceToOne()</li>
     *      <li>markEndOfSentences()</li>
     * </ul>
     */
    private function setSentences()
    {
        $text = implode("", $this->symbols);
        $this->sentences = explode("\n", $text);
    }

    /**
     * Split sentences on words.
     * Take each sentence and create for each word new object(\classes\word).
     * For creating object need transfer to him word and sentence. After creating
     * objects add to array of words.
     */
    private function setWords()
    {
        foreach ($this->sentences as $sentence) {
            $lowerSent = mb_strtolower($sentence);
            $this->symbols = str_split($lowerSent);
            $this->processAll();
            $line = implode("", $this->symbols);
            $words = explode(" ", $line);
            foreach ($words as $word) {
                $wordLen = strlen($word);
                $wordPosL = stripos($sentence, $word);
                if ($wordPosL === false) continue;
                $wordPosR = ($wordPosL + $wordLen - 1);
                $beforeWord = substr($sentence, 0, $wordPosL);
                $wordFromSentence = substr($sentence, $wordPosL, $wordLen);
                $afterWord = substr($sentence, ($wordPosR+1));
                if ($wordPosL === 0)
                    $upSentence = $beforeWord . "<b class='wordsInContext'>" . $wordFromSentence . "</b>" . $afterWord;
                else $upSentence = $beforeWord . "<b class='wordsInContext'>$wordFromSentence</b>" . $afterWord;
                $this->words[] = new Word($word, $upSentence);
            }
        }
    }

    /**
     * Take array of words and save to $uniqWords only unique words.
     */
    private function setUniqWords()
    {
        $this->uniqWords = array_unique($this->words);
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @return array
     */
    public function getSentences(): array
    {
        return $this->sentences;
    }

    /**
     * @return Word[]
     */
    public function getWords(): array
    {
        return $this->words;
    }

    /**
     * @return Word[]
     */
    public function getUniqWords(): array
    {
        return $this->uniqWords;
    }
}