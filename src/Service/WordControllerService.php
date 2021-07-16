<?php


namespace App\Service;


use App\Dto\Words;
use App\Entity\LearnedWords;
use App\Entity\UntranslatableWords;
use App\Repository\LearnedWordsRepository;
use App\Repository\UntranslatableWordsRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WordControllerService extends AbstractController
{
    /**
     * @param Words $words
     *
     * @return void
     *
     * @throws \Exception
     */
    public function addWordsToDb(Words $words, ObjectManager $em, LearnedWordsRepository $lwr, UntranslatableWordsRepository $uwr) : void
    {
        $textProcessor = new TextProcessor();
        $language = $words->getLanguage();

        $allLearnedWords = $lwr->findAll();
        $allUntranslatableWords = $uwr->findAll();

        $uniqLearnedWords = $textProcessor->getUniqWords($words->getLearnedWords(), $language);
        $uniqUntranslatableWords = $textProcessor->getUniqWords($words->getUntranslatableWords(), $language);

        $learnedWords = Helper::array_diff_inLowercase($uniqLearnedWords, $allLearnedWords, $allUntranslatableWords);
        $untranslatableWords = Helper::array_diff_inLowercase($uniqUntranslatableWords, $allLearnedWords, $allUntranslatableWords);

        foreach ($learnedWords as $lw) {
            $word = new LearnedWords();

            $word->setWord($lw);
            $word->setIdLanguage($language);

            $em->persist($word);
        }

        foreach ($untranslatableWords as $uw) {
            $word = new UntranslatableWords();

            $word->setWord($uw);
            $word->setIdLanguage($language);

            $em->persist($word);
        }

        $em->flush();
    }
}