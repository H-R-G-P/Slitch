<?php


namespace App\Service;


use App\Dto\TypeOfSortingDTO;
use App\Entity\PairOfWords;
use App\Entity\Stuff;
use Doctrine\Common\Collections\Collection;
use Doctrine\Persistence\ObjectManager;

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

    /**
     * @param Stuff $stuff
     * @param TypeOfSortingDTO $typeOfSortingDTO
     * @param Collection<int, PairOfWords> $pairsOfWordsFromDict
     *
     * @return array<int, PairOfWords>
     *
     * @throws \Exception
     */
    public function getSortedWords(Stuff $stuff, TypeOfSortingDTO $typeOfSortingDTO, Collection $pairsOfWordsFromDict): array
    {
        $wordsFromText = (new TextProcessor())->getUniqWords(mb_strtolower($stuff->getText()), $stuff->getLanguage());

        $originalWordsFromDict = [];
        foreach ($pairsOfWordsFromDict as $pair){
            if($pair !== null){
                $originalWordsFromDict[] = $pair->getOriginal();
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

    public function setDictionaryFromText(Stuff $stuff, ObjectManager $em): void
    {
        $wordsFromText = (new TextProcessor())->getUniqWords(mb_strtolower($stuff->getText()), $stuff->getLanguage());

        foreach ($wordsFromText as $uniqWord) {
            $newPair = new PairOfWords($uniqWord, $stuff);
            $stuff->getPairsOfWords()->add($newPair);
            $em->persist($newPair);
        }

        $em->flush();
    }
}