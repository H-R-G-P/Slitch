<?php


namespace App\Service;


use App\Dto\Words;
use App\Entity\LearnedWords;
use App\Entity\UntranslatableWords;
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
    public function addWordsToDb(Words $words) : void
    {
        $textProcessor = new TextProcessor();
        $language = $words->getLanguage();

        $em = $this->getDoctrine()->getManager();
        $learnedWordsRep = $this->getDoctrine()->getRepository(LearnedWords::class);
        $untranslatableWordsRep = $this->getDoctrine()->getRepository(UntranslatableWords::class);

        $allLearnedWords = $learnedWordsRep->findAll();
        $allUntranslatableWords = $untranslatableWordsRep->findAll();

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