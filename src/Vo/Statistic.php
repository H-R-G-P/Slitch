<?php


namespace App\Vo;


use App\Dto\Texts;
use App\Service\StatisticService;
use App\Service\TextProcessor;

class Statistic
{
    /**
     * The percentage of matches words with other texts register insensitive.
     *
     * @var int Percentage.
     */
    private int $matchesAll = 0;

    /**
     * The percentage of matches unique words with other texts register insensitive.
     *
     * @var int Percentage.
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
    public function getMatchesAll(): int
    {
        return $this->matchesAll;
    }

    /**
     * @param Texts $texts
     *
     * @throws \Exception
     */
    public function setMatchesAll(Texts $texts): void
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

        $this->matchesAll = ($countOfMatches * 100)/$countOfWords;
    }

    /**
     * @return int
     */
    public function getMatches(): int
    {
        return $this->matches;
    }

    /**
     * @param Texts $texts
     *
     * @throws \Exception
     */
    public function setMatches(Texts $texts): void
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

        $this->matches = (count($matchedWords) * 100)/count(array_unique($allWords));
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
}