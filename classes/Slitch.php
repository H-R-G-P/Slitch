<?php


namespace classes;


use mysqli;

class Slitch extends TextProcessor
{
    /**
     * @var array
     */
    private array $learnedWords = [];
    /**
     * @var array
     */
    private array $notLearnedWords = [];

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
    public function __construct(string $text, string $lang = 'EN')
    {
        parent::__construct($text, $lang);
        $this->setLearnedWords();
        $this->setNotLearnedWords();
    }

    /**
     * Get words from database and add to properties $learnedWords.
     */
    private function setLearnedWords()
    {
        $mysqli = new mysqli("localhost", "slitch", "slitch-psw", "slitch");
        $mysqli->set_charset('utf8');
        $mysqli_result = $mysqli->query("SELECT `word` FROM " . $this->getLang() . "_words");
        $mysqli->close();

        while ($DB_row = $mysqli_result->fetch_assoc())
            $this->learnedWords[] = $DB_row['word'];
    }

    /**
     * Add array to $notLearnedWords from different of $uniqWords and $learnedWords.
     */
    private function setNotLearnedWords()
    {
        $NLW = array_diff($this->getUniqWords(), $this->learnedWords);
        $this->notLearnedWords = array_values($NLW);
    }

    /**
     * @return array Each value is object of class Word.
     */
    public function getNotLearnedWords(): array
    {
        return $this->notLearnedWords;
    }
}