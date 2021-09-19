<?php


namespace App\Vo;


use App\Dto\Texts;
use App\Service\StatisticService;
use App\Service\TextProcessor;

class Statistic
{
    /**
     * The percentage of words matches in each text from all words in all texts.
     *
     * @var int
     */
    private int $matchesAllPerc = 0;

    /**
     * Words matches in each text from all words in all texts.
     *
     * @var int
     */
    private int $matchesAll = 0;

    /**
     * The percentage of uniq words matches in each text from uniq words in all texts.
     *
     * @var int
     */
    private int $matchesPerc = 0;

    /**
     * Uniq words matches in each text from uniq words in all texts.
     *
     * @var int
     */
    private int $matches = 0;

    /**
     * @var int Uniq words count in all texts.
     */
    private int $uniqWordsCount = 0;

    /**
     * @var Repetition
     */
    private Repetition $repetition;

    public function __construct()
    {
        $this->repetition = new Repetition();
    }

    /**
     * @return int
     */
    public function getMatchesAllPerc(): int
    {
        return $this->matchesAllPerc;
    }

    /**
     * @param Texts $texts
     *
     * @throws \Exception
     */
    public function setMatchesAllPerc(Texts $texts): void
    {
        $textProcessor = new TextProcessor();

        $words = [];
        $allRepeats = [];
        $countOfWords = 0;
        foreach ($texts->getTexts() as $text) {
            $wordsTemp = $textProcessor->getWords(strtolower($text), $texts->getLanguage());
            $words[] = $wordsTemp;
            $countOfWords += count($wordsTemp);
            $repeats = StatisticService::countRepeats($wordsTemp);
            $allRepeats = StatisticService::merge($allRepeats, $repeats);
        }

        $matchedWords = StatisticService::intersect($words);

        $countOfMatches = StatisticService::getSum($allRepeats, $matchedWords);

        $this->matchesAll = $countOfMatches;
        $this->matchesAllPerc = ($countOfMatches * 100)/$countOfWords;
    }

    /**
     * @return int
     */
    public function getMatchesPerc(): int
    {
        return $this->matchesPerc;
    }

    /**
     * @param Texts $texts
     *
     * @throws \Exception
     */
    public function setMatchesPerc(Texts $texts): void
    {
        $textProcessor = new TextProcessor();

        $words = [];
        $allWords = [];
        foreach ($texts->getTexts() as $text) {
            $wordsTemp = $textProcessor->getWords(strtolower($text), $texts->getLanguage());
            $words[] = $wordsTemp;
            $allWords = array_merge($allWords, $wordsTemp);
        }

        $matchedWords = StatisticService::intersect($words);

        $this->matches = count($matchedWords);
        $this->matchesPerc = ($this->matches * 100)/count(array_unique($allWords));
    }

    /**
     * @return int
     */
    public function getUniqWordsCount(): int
    {
        return $this->uniqWordsCount;
    }

    /**
     * @param Texts $texts
     *
     * @throws \Exception
     */
    public function setUniqWordsCount(Texts $texts): void
    {
        $textProcessor = new TextProcessor();

        $uniqWordsCount = 0;
        foreach ($texts->getTexts() as $text) {
            $wordsTemp = $textProcessor->getUniqWords(strtolower($text), $texts->getLanguage());
            $uniqWordsCount += count($wordsTemp);
        }

        $this->uniqWordsCount = $uniqWordsCount;
    }

    /**
     * @return Repetition
     */
    public function getRepetition(): Repetition
    {
        return $this->repetition;
    }

    /**
     * @param Texts $texts
     */
    public function setRepetition(Texts $texts): void
    {
        $this->repetition->setRepetition($texts);
    }

    /**
     * @return int
     */
    public function getMatchesAll(): int
    {
        return $this->matchesAll;
    }

    /**
     * @return int
     */
    public function getMatches(): int
    {
        return $this->matches;
    }
}