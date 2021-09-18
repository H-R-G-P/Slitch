<?php


namespace App\Vo;


use App\Dto\Texts;
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
     * @param array $arrayWithArrays
     *
     * @return array
     */
    public function intersect(array $arrayWithArrays): array
    {
        $resultArray = $arrayWithArrays[0];
        for ($i = 1; $i < count($arrayWithArrays); $i++){
            $resultArray = array_intersect($resultArray, $arrayWithArrays[$i]);
        }

        return array_unique($resultArray);
    }

    /**
     * @param string[] $array
     *
     * @return array<string, int>
     */
    public function countRepeats(array $array): array
    {
        $result = [];

        foreach ($array as $str) {
            if (array_key_exists($str, $result)){
                $result[$str] += 1;
            }else{
                $result[$str] = 1;
            }
        }

        return $result;
    }

    /**
     * @param array<string, int> $array1
     * @param array<string, int> $array2
     *
     * @return array<string, int>
     */
    public function merge(array $array1, array $array2): array
    {
        foreach ($array2 as $str => $int) {
            if (array_key_exists($str, $array1)){
                $array1[$str] += $int;
                unset($array2[$str]);
            }else{
                $array1[$str] = $int;
                unset($array2[$str]);
            }
        }
        foreach ($array1 as $str => $int) {
            if (array_key_exists($str, $array2)){
                $array2[$str] += $int;
            }else{
                $array2[$str] = $int;
            }
        }

        return $array1;
    }

    /**
     * Return sum integers of same strings in both arrays
     *
     * @param array<string, int> $array1
     * @param string[] $array2
     *
     * @return int
     */
    public function getSum(array $array1, array $array2): int
    {
        $count = 0;

        foreach ($array1 as $str => $cnt) {
            if (in_array($str, $array2, true)){
                $count += $cnt;
            }
        }

        return $count;
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
            $repeats = $this->countRepeats($wordsTemp);
            $allRepeats = $this->merge($allRepeats, $repeats);
        }

        $matchedWords = $this->intersect($words);

        $countOfMatches = $this->getSum($allRepeats, $matchedWords);

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

        $matchedWords = $this->intersect($words);

        $this->matches = (count($matchedWords) * 100)/count(array_unique($allWords));
    }
}