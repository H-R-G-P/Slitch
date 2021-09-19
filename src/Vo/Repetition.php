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
     * @var int Count of words that repeats two times.
     */
    private int $rare = 0;

    /**
     * @var int Count of words that repeats 3-5 times.
     */
    private int $average = 0;

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
}