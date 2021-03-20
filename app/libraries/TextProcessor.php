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
     * Set text's properties:
     * <ul>
     *      <li>sentences</li>
     *      <li>words</li>
     *      <li>unique words</li>
     *      <li>learned words</li>
     *      <li>not learned words.</li>
     * </ul>
     * @param $text string Text that processing.
     * @param string $lang Language of text that processing.
     */
    public function __construct(string $text, string $lang = 'english')
    {
        $this->lang = $lang;
        if (strlen($text) == 0) return '';
        $text = trim($text);
        $this->symbols = str_split($text);
        $this->processEnter();
        $this->processSomeSpaceToOne();
        $this->markEndsOfSentences();
        $this->setSentences();
        $this->setWords();
        $this->setUniqWords();
    }

    /**
     * Process "$this->symbols".
     */
    private function processAll()
	{
        // First
		$this->processThreeDots();
		/*echo "\nTHE END processThreeDots\n";
		print_r($this->symbols);
		echo "\n";*/

        // Second
		$this->processEnter();
		/*echo "\nTHE END processEnter\n";
		print_r($this->symbols);
		echo "\n";*/

        // Before remainAlphabetSpaceMinus()
		$this->processBraked();
		/*echo "\nTHE END processBraked\n";
		print_r($this->symbols);
		echo "\n";*/

        // Before remainAlphabetSpaceMinus()
		$this->processShortWordsWithPoint();
		/*echo "\nTHE END processShortWordsWithPoint\n";
		print_r($this->symbols);
		echo "\n";*/

        // Before remainAlphabetSpaceMinus()
		$this->processShortWordsWithApostrophe();
		/*echo "\nTHE END processShortWordsWithApostrophe\n";
		print_r($this->symbols);
		echo "\n";*/

        // Before remainAlphabetSpaceMinus()
		$this->processWhitespaces();
		/*echo "\nTHE END processWhitespaces\n";
		print_r($this->symbols);
		echo "\n";*/

		$this->remainAlphabetSpaceMinus();
		/*echo "\nTHE END remainAlphabetSpaceMinus\n";
		print_r($this->symbols);
		echo "\n";*/

        // After remainAlphabetSpaceMinus()
		$this->processSomeSpaceToOne();
		/*echo "\nTHE END processSomeSpaceToOne\n";
		print_r($this->symbols);
		echo "\n";*/

        // After remainAlphabetSpaceMinus()
		$this->processMinus();
		/*echo "\nTHE END processMinus\n";
		print_r($this->symbols);
		echo "\n";*/
	}

    /**
     * Find "\n" from $symbols and correct delete them.
     */
    private function processEnter()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == "\n")
			{
			    // When text received from browser than next string must be, but if text received from code than next string must not be.
			    unset ($this->symbols[$i-1]);
				$this->symbols[$i] = " ";
			}
		}
	}

    /**
     * Find some spaces in a row and leave one space.
     */
    private function processSomeSpaceToOne()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == " ")
			{
				if ($this->symbols[$i-1] == " ") {
					unset ($this->symbols[$i-1]);
				}
			}
		}
		$this->resetKeys();
	}

    /**
     * Correctly delete "-".
     */
    public function processHyphens(array $symbols)
    {
        $str = implode("", $symbols);
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
        $str = preg_replace($pattern, $replacement, $str);
        return $this->splitOnChars($str);
    }

    /**
     * Correctly delete some (1 - infinity) dots in the row.
     */
    public function processDots(array $symbols)
    {
        $str = implode("", $symbols);
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
        $str = preg_replace($pattern, $replacement, $str);
        return $this->splitOnChars($str);
    }

    /**
     * Delete endings from short words with apostrophe from $symbols.
     * @param array $symbols Symbols without endings from short words with apostrophe
     * @return array
     */
    public function processShortWordsWithApostrophe(array $symbols) : array
	{
		for ($i=0, $size = count($symbols); $i < $size; $i++) {
			if ($symbols[$i] == "'") {

				/***  're  ***/
					if ($symbols[$i-1] != " " &&
						$symbols[$i+1] == "r" &&
						$symbols[$i+2] == "e")
					{
						unset($symbols[$i]);
						unset($symbols[$i+1]);
						unset($symbols[$i+2]);
						$i += 2;
					}
				/***  's  ***/
					elseif (
						$symbols[$i-1] != " " &&
						$symbols[$i+1] == "s")
					{
						unset($symbols[$i]);
						unset($symbols[$i+1]);
						$i += 1;
					}
				/***  'm  ***/
					elseif (
						$symbols[$i-1] != " " &&
						$symbols[$i+1] == "m")
					{
						unset($symbols[$i]);
						unset($symbols[$i+1]);
						$i += 1;
					}
				/***  'em  ***/
					elseif (
						$symbols[$i-1] != " " &&
						$symbols[$i+1] == "e" &&
						$symbols[$i+2] == "m")
					{
						unset($symbols[$i]);
						unset($symbols[$i+1]);
						unset($symbols[$i+2]);
						$i += 2;
					}
				/***  'll  ***/
					elseif (
						$symbols[$i-1] != " " &&
						$symbols[$i+1] == "l" &&
						$symbols[$i+2] == "l")
					{
						unset($symbols[$i]);
						unset($symbols[$i+1]);
						unset($symbols[$i+2]);
						$i += 2;
					}
				/***  n't  ***/
					elseif (
						$symbols[$i-2] != " " &&
						$symbols[$i-1] == "n" &&
						$symbols[$i+1] == "t")
					{
					    $symbols = $this->removePrevSymbolsToSpace($symbols, $i+1);
						$i += 1;
					}
				/***  'd  ***/
					elseif (
						$symbols[$i-1] != " " &&
						$symbols[$i+1] == "d")
					{
						unset($symbols[$i]);
						unset($symbols[$i+1]);
						$i += 1;
					}
				/***  've  ***/
					elseif (
						$symbols[$i-1] != " " &&
						$symbols[$i+1] == "v" &&
						$symbols[$i+2] == "e")
					{
						unset($symbols[$i]);
						unset($symbols[$i+1]);
						unset($symbols[$i+2]);
						$i += 2;
					}
				/***  '(space)  ***/
					elseif (
						$symbols[$i-1] != " " &&
						$symbols[$i+1] == " ")
					{
						unset($symbols[$i]);
					}

			}
		}
		return array_values($symbols);
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

    public function remainAlphabetSpaceMinus(string $text, string $language) : string
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
     * Detect braked from $symbols and correct delete.
     */
    private function processBraked()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == "(" || $this->symbols[$i] == ")") {

				if ($this->symbols[$i-1] == " " ||
					$this->symbols[$i+1] == " ") unset($this->symbols[$i]);
				else $this->symbols[$i] = " ";

			}
		}
		$this->resetKeys();
	}

    /**
     * Find "_" from $symbols and correct delete them.
     */
    private function processWhitespaces()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == "_")
			{
				if ($this->symbols[$i-1] === " " ||
                    $this->symbols[$i+1] === " ")
                    unset ($this->symbols[$i]);
				else $this->symbols[$i] = " ";
			}
		}
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