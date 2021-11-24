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
        $helper = new Helper();
        $textProcessor = new TextProcessor();
        $language = $words->getLanguage();

        $allLearnedWords = $lwr->findAll();
        $allUntranslatableWords = $uwr->findAll();

        if ($words->getLearnedWords()) {
            $lowerLearnedWords = mb_strtolower($words->getLearnedWords());

            $uniqLearnedWords = $textProcessor->getUniqWords($lowerLearnedWords, $language);

            $learnedWords = $helper->array_diff_inLowercase($uniqLearnedWords, $allLearnedWords, $allUntranslatableWords);

            foreach ($learnedWords as $lw) {
                $word = new LearnedWords();

                $word->setWord($lw);
                $word->setLanguage($language);

                $em->persist($word);
            }

            $em->flush();
        }

        $allLearnedWords = $lwr->findAll();

        if ($words->getUntranslatableWords()) {
            $lowerUntranslatableWords = mb_strtolower($words->getUntranslatableWords());

            $uniqUntranslatableWords = $textProcessor->getUniqWords($lowerUntranslatableWords, $language);

            $untranslatableWords = $helper->array_diff_inLowercase($uniqUntranslatableWords, $allLearnedWords, $allUntranslatableWords);

            foreach ($untranslatableWords as $uw) {
                $word = new UntranslatableWords();

                $word->setWord($uw);
                $word->setLanguage($language);

                $em->persist($word);
            }

            $em->flush();
        }
    }

    /**
     * @param Words $words
     * @param ObjectManager $em
     * @param LearnedWordsRepository $lwr
     * @param UntranslatableWordsRepository $uwr
     *
     * @return void
     *
     * @throws \Exception
     */
    public function deleteWordsFromDb(Words $words, ObjectManager $em, LearnedWordsRepository $lwr, UntranslatableWordsRepository $uwr) : void
    {
        $textProcessor = new TextProcessor();
        $language = $words->getLanguage();

        if ($words->getLearnedWords()) {
            $allLearnedWords = $lwr->findAll();

            $lowerLearnedWords = mb_strtolower($words->getLearnedWords());

            $uniqLearnedWords = $textProcessor->getUniqWords($lowerLearnedWords, $language);

            $learnedWords = array_uintersect($allLearnedWords, $uniqLearnedWords, function ($v1,$v2) {
                if ("$v1"===$v2) return 0;
                elseif ($v1 > "$v2") return 1;
                else return -1;
            });

            foreach ($learnedWords as $lw) {
                $em->remove($lw);
            }
        }

        if ($words->getUntranslatableWords()) {
            $allUntranslatableWords = $uwr->findAll();

            $lowerUntranslatableWords = mb_strtolower($words->getUntranslatableWords());

            $uniqUntranslatableWords = $textProcessor->getUniqWords($lowerUntranslatableWords, $language);

            $untranslatableWords = array_uintersect($allUntranslatableWords, $uniqUntranslatableWords, function ($v1,$v2) {
                if ("$v1"===$v2) return 0;
                elseif ($v1 > "$v2") return 1;
                else return -1;
            });

            foreach ($untranslatableWords as $uw) {
                $em->remove($uw);
            }
        }

        $em->flush();
    }
}