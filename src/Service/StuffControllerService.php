<?php


namespace App\Service;


use App\Entity\Stuff;
use App\Repository\LearnedWordsRepository;
use App\Repository\UntranslatableWordsRepository;
use App\Vo\Word;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StuffControllerService extends AbstractController
{
    /**
     * @param Stuff $stuff
     * @param LearnedWordsRepository $lwr
     * @param UntranslatableWordsRepository $uwr
     *
     * @throws \Exception
     *
     * @return Word[]
     */
    public function getNotLearnedWords(Stuff $stuff, LearnedWordsRepository $lwr, UntranslatableWordsRepository $uwr) : array
    {
        $textProcessor = new TextProcessor();

        $decodeText = html_entity_decode($stuff->getText(), ENT_QUOTES, 'utf-8');
        $uniqWords = $textProcessor->getUniqWords($decodeText, $stuff->getLanguage());
        // TODO Copy HelperTest class in this project
        // TODO Modify function Helper::array_diff_inLowercase() as it not translates words type of 'Word' to strings and return this objects if words type of 'Word' was pasted in first array
        $notLearnedWords = Helper::array_diff_inLowercase($uniqWords, $lwr->findAll(), $uwr->findAll());
        $uniqWordsObj = $textProcessor->getUniqWordsObj($decodeText, $stuff->getLanguage());

        return array_intersect($uniqWordsObj, $notLearnedWords);
    }
}