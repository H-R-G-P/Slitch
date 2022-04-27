<?php


namespace App\Service;


use App\Entity\Stuff;

class DictionaryService
{
    /**
     * @param Stuff $stuff
     *
     * @return array<int, string>
     *
     * @throws \Exception
     */
    public function sortByQuantityRepeats(Stuff $stuff): array
    {
        $words = (new TextProcessor())->getWords(mb_strtolower($stuff->getText()), $stuff->getLanguage());
        $wordsRepeats = (new StatisticService())->countRepeats($words);
        arsort($wordsRepeats, SORT_NUMERIC);
        $sortedWords = [];
        foreach ($wordsRepeats as $word => $repeats) {
            $sortedWords[] = $word;
        }

        return $sortedWords;
    }
}