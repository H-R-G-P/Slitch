<?php


namespace App\Vo;

use App\Dto\Texts;
use App\Service\StatisticService;
use App\Service\TextProcessor;

/**
 * Class Repetition
 * Calculate and store
 *
 * @package App\Vo
 */
class Repetition
{
    /**
     * @var int Percentage of words that repeats two times.
     */
    private int $rarePercentage = 0;

    /**
     * @var int Count of words that repeats two times.
     */
    private int $rare = 0;

    /**
     * @var int Percentage of words that repeats 3-5 times.
     */
    private int $averagePercentage = 0;

    /**
     * @var int Count of words that repeats 3-5 times.
     */
    private int $average = 0;

    /**
     * @var int Percentage of words that repeats >5 times.
     */
    private int $frequentPercentage = 0;

    /**
     * @var int Count of words that repeats >5 times.
     */
    private int $frequent = 0;

    public function setRepetition(Texts $texts)
    {
        $textProcessor = new TextProcessor();
        $allRepeats = [];

        foreach ($texts->getTexts() as $text) {
            $wordsTemp = $textProcessor->getWords(strtolower($text), $texts->getLanguage());
            $repeats = StatisticService::countRepeats($wordsTemp);
            $allRepeats = StatisticService::merge($allRepeats, $repeats);
        }

        $rare = 0;
        $average = 0;
        $frequent = 0;

        foreach ($allRepeats as $count) {
            if ($count === 2){
                $rare += 1;
            }elseif ($count > 2 && $count < 6){
                $average += 1;
            }elseif ($count > 5){
                $frequent += 1;
            }
        }

        $this->rare = $rare;
        $this->average = $average;
        $this->frequent = $frequent;

        $this->rarePercentage = ($rare * 100)/count($allRepeats);
        $this->averagePercentage = ($average * 100)/count($allRepeats);
        $this->frequentPercentage = ($frequent * 100)/count($allRepeats);
    }

    /**
     * @return int
     */
    public function getRare(): int
    {
        return $this->rare;
    }

    /**
     * @return int
     */
    public function getAverage(): int
    {
        return $this->average;
    }

    /**
     * @return int
     */
    public function getFrequent(): int
    {
        return $this->frequent;
    }

    /**
     * @return int
     */
    public function getRarePercentage(): int
    {
        return $this->rarePercentage;
    }

    /**
     * @return int
     */
    public function getAveragePercentage(): int
    {
        return $this->averagePercentage;
    }

    /**
     * @return int
     */
    public function getFrequentPercentage(): int
    {
        return $this->frequentPercentage;
    }
}