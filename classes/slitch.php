<?php


namespace classes;

use mysqli;

class slitch extends processes
{
    /**
     * @var string
     */
    private $receivedText;
    /**
     * @var array
     */
    private $receivedWords;
    /**
     * @var array
     */
    private $uniqReceivedWords;
    /**
     * Words that are in the database.
     * @var array
     */
    private $learnedWords;
    /**
     * Words that aren't in database and are in {@link $receivedWords}.
     * @var array
     */
    private $notLearnedWords;


    /**
     * Make array where values are words from text.
     * @return void
     */
    public function splitTextIntoWords()
    {
        $this->splitTextIntoSymbols();
        $this->processSymbols();
        $this->setReceivedWords($this->makesWordsFromSymbols());
    }

    private function splitTextIntoSymbols()
    {
        $lowerText = strtolower($this->getReceivedText());
        $symbols = str_split($lowerText);
        $this->setSymbols($symbols);
    }

    /**
     * @return false|string[]
     */
    private function makesWordsFromSymbols()
    {
        $line = implode("", $this->getSymbols());
        return explode(" ", $line);
    }


    /**
     * @return string
     */
    private function getReceivedText(): string
    {
        return $this->receivedText;
    }

    /**
     * @param string $receivedText
     */
    private function setReceivedText(string $receivedText): void
    {
        $this->receivedText = $receivedText;
    }

    /**
     * @return array
     */
    private function getReceivedWords(): array
    {
        return $this->receivedWords;
    }

    /**
     * @param array $receivedWords
     */
    private function setReceivedWords(array $receivedWords): void
    {
        $this->receivedWords = $receivedWords;
    }

    /**
     * @return array
     */
    private function getUniqReceivedWords(): array
    {
        return $this->uniqReceivedWords;
    }

    public function setUniqReceivedWords(): void
    {
        $this->uniqReceivedWords = array_unique($this->getReceivedWords());
    }

    /**
     * @return array
     */
    private function getLearnedWords(): array
    {
        return $this->learnedWords;
    }

    private function setLearnedWords(): void
    {
        $mysqli = new mysqli("localhost", "slitch", "slitch-psw", "slitch");
        $mysqli->set_charset('utf8');
        $mysqli_result = $mysqli->query("SELECT `word` FROM `slitch`.`words`");
        $mysqli->close();

        $DBWords = [];
        while ($DB_row = $mysqli_result->fetch_assoc()) $DBWords[] = $DB_row['word'];
        $this->learnedWords = $DBWords;
    }

    /**
     * @return array
     */
    public function getNotLearnedWords(): array
    {
        return $this->notLearnedWords;
    }

    public function setNotLearnedWords(): void
    {
        $NLW = array_diff($this->getUniqReceivedWords(), $this->getLearnedWords());
        $this->notLearnedWords = array_values($NLW);
    }

    public function __construct($receivedText)
    {
        $this->setLearnedWords();
        $this->setReceivedText($receivedText);
    }
}