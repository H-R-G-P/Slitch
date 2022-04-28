<?php


namespace App\Service;


use App\Dto\TypeOfSortingDTO;
use App\Entity\PairOfWords;
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

    public function getSortedWords(Stuff $stuff, TypeOfSortingDTO $typeOfSortingDTO): array
    {
        $pairsOfWordsFromDict = $stuff->getPairsOfWords();
        $wordsFromText = (new TextProcessor())->getUniqWords(mb_strtolower($stuff->getText()), $stuff->getLanguage());

        if($pairsOfWordsFromDict->count() === 0){
            foreach ($wordsFromText as $uniqWord) {
                $pairsOfWordsFromDict->add(new PairOfWords($uniqWord, $stuff));
            }

            $originalWordsFromDict = $wordsFromText;
        }else {
            $originalWordsFromDict = [];
            foreach ($pairsOfWordsFromDict as $pair){
                if($pair !== null){
                    $originalWordsFromDict[] = $pair->getOriginal();
                }
            }
        }

        $usersWords = array_diff($originalWordsFromDict, $wordsFromText);

        if ($typeOfSortingDTO->isByQuantityRepeats()){
            $sortedWordsFromText = $this->sortByQuantityRepeats($stuff);

            $textWords = array_intersect($sortedWordsFromText, $originalWordsFromDict);
        }elseif ($typeOfSortingDTO->isByTextOrder()){
            $textWords = array_intersect($wordsFromText, $originalWordsFromDict);
        }else{
            $textWords = [];
        }

        $sortedWords = array_merge($textWords, $usersWords);
        foreach ($pairsOfWordsFromDict as $pair) {
            $key = array_search($pair->getOriginal(), $sortedWords);
            if ($key !== false){
                $sortedWords[$key] = $pair;
            }
        }

        return $sortedWords;
    }
}