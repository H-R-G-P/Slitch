<?php


namespace classes;


use mysqli;

class Processor
{
    /**
     * @var array
     */
    private array $sentences;
    /**
     * @var array
     */
    private array $words;
    /**
     * @var array
     */
    private array $uniqWords;
    /**
     * @var array
     */
    private array $learnedWords;
    /**
     * @var array
     */
    private array $notLearnedWords;
    /**
     * Array of symbols in lowercase.
     * @var array
     */
    private array $symbols;

    /**
     * Set text's properties:
     * <ul>
     *      <li>sentences</li>
     *      <li>words</li>
     *      <li>unique words</li>
     *      <li>learned words</li>
     *      <li>not learned words.</li>
     * </ul>
     * @param $text string
     */
    public function __construct(string $text)
    {
        if (strlen($text) == 0) echo 'You give empty parameter';
        $text = trim($text);
        $this->symbols = str_split($text);
        $this->processEnter();
        $this->processSomeSpaceToOne();
        $this->markEndsOfSentences();
        $this->setSentences();
        $this->setWords();
        $this->setUniqWords();
        $this->setLearnedWords();
        $this->setNotLearnedWords();
    }

    private function processAll()
	{

		$this->processEnter();
		/*echo "\nTHE END processEnter\n";
		print_r($this->symbols);
		echo "\n";*/

		$this->processBraked();
		/*echo "\nTHE END processBraked\n";
		print_r($this->symbols);
		echo "\n";*/

		$this->processShortWordsWithPoint();
		/*echo "\nTHE END processShortWordsWithPoint\n";
		print_r($this->symbols);
		echo "\n";*/

		$this->processShortWordsWithApostrophe();
		/*echo "\nTHE END processShortWordsWithApostrophe\n";
		print_r($this->symbols);
		echo "\n";*/

		$this->processWhitespaces();
		/*echo "\nTHE END processWhitespaces\n";
		print_r($this->symbols);
		echo "\n";*/

		$this->remainAlphabetAndSpaces();
		/*echo "\nTHE END filterOut\n";
		print_r($this->symbols);
		echo "\n";*/

		$this->processSomeSpaceToOne();
		/*echo "\nTHE END processSomeSpaceToOne\n";
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
     * Detect short words with point from $symbols and delete.
     */
    private function processShortWordsWithPoint()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == ".") {

				/*** a.m ***/
					if ($this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "A"  &&
						$this->symbols[$i+1] == "M")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/*** p.m ***/
					elseif (
						$this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "P"  &&
						$this->symbols[$i+1] == "M")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/*** e.g. ***/
					elseif (
						$this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "E"  &&
						$this->symbols[$i+1] == "G"  &&
						$this->symbols[$i+2] == ".")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/*** i.e. ***/
					elseif (
						$this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "I"  &&
						$this->symbols[$i+1] == "E"  &&
						$this->symbols[$i+2] == ".")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/*** vs. ***/
					elseif (
						$this->symbols[$i-3] == " "  &&
						$this->symbols[$i-2] == "V"  &&
						$this->symbols[$i-1] == "S")
					{
						unset($this->symbols[$i-2]);
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
					}
				/*** a.i. ***/
					elseif (
						$this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "A"  &&
						$this->symbols[$i+1] == "I"  &&
						$this->symbols[$i+2] == ".")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}

			}
		}
		$this->resetKeys();
	}

    /**
     * Detect endings from short words with apostrophe from $symbols and delete.
     */
    private function processShortWordsWithApostrophe()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == "'") {

				/***  're  ***/
					if ($this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "r" &&
						$this->symbols[$i+2] == "e")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/***  's  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "s")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/***  'm  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "m")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/***  'em  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "e" &&
						$this->symbols[$i+2] == "m")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/***  'll  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "l" &&
						$this->symbols[$i+2] == "l")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/***  n't  ***/
					elseif (
						$this->symbols[$i-2] != " " &&
						$this->symbols[$i-1] == "n" &&
						$this->symbols[$i+1] == "t")
					{
					    $this->symbols = $this->removePrevSymbolsToSpace($this->symbols, $i+1);
						$i += 1;
					}
				/***  'd  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "d")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/***  've  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "v" &&
						$this->symbols[$i+2] == "e")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/***  '(space)  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == " ")
					{
						unset($this->symbols[$i]);
					}

			}
		}
		$this->resetKeys();
	}

    /**
     * Find all '. ', '! ', '? ' and change " " to "\n".
     * Last sentence don't marking.
     */
    private function markEndsOfSentences()
    {
        for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] === "." ||
                $this->symbols[$i] === "?" ||
                $this->symbols[$i] === "!")
			{
				if (array_key_exists($i+1, $this->symbols) &&
                    $this->symbols[$i+1] === " ")
				{
					$this->symbols[$i+1] = "\n";
				}
			}
		}
	}

    private function remainAlphabetAndSpaces()
    {
        $this->symbols = array_filter($this->symbols, function ($value){
            return preg_match("/^[a-zA-Z\s-]+$/", $value);
        });
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
            $lowerSent = strtolower($sentence);
            $this->symbols = str_split($lowerSent);
            $this->processAll();
            $line = implode("", $this->symbols);
            $words = explode(" ", $line);
            foreach ($words as $word) {
                $wordLen = strlen($word);
                $wordPosL = stripos($sentence, $word);
                $wordPosR = ($wordPosL + $wordLen - 1);
                $beforeWord = substr($sentence, 0, $wordPosL);
                $wordFromSentence = substr($sentence, $wordPosL, $wordLen);
                $afterWord = substr($sentence, ($wordPosR+1));
                if ($wordPosL === 0)
                    $upSentence = $beforeWord . "<b>" . $wordFromSentence . "</b>" . $afterWord;
                else $upSentence = $beforeWord . "<b>$wordFromSentence</b>" . $afterWord;
                $this->words[] = new word($word, $upSentence);
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
     * Get words from database and add to properties $learnedWords.
     */
    private function setLearnedWords()
    {
        $mysqli = new mysqli("localhost", "slitch", "slitch-psw", "slitch");
        $mysqli->set_charset('utf8');
        $mysqli_result = $mysqli->query("SELECT `word` FROM `slitch`.`words`");
        $mysqli->close();

        while ($DB_row = $mysqli_result->fetch_assoc())
            $this->learnedWords[] = $DB_row['word'];
    }

    /**
     * Add array to $notLearnedWords from different of $uniqWords and $learnedWords.
     */
    private function setNotLearnedWords()
    {
        $NLW = array_diff($this->uniqWords, $this->learnedWords);
        $this->notLearnedWords = array_values($NLW);
    }

    /**
     * @return array Each value is object of class Word.
     */
    public function getNotLearnedWords()
    {
        return $this->notLearnedWords;
    }
}