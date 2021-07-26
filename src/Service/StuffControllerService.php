<?php


namespace App\Service;


use App\Entity\LearnedWords;
use App\Entity\Stuff;
use App\Entity\UntranslatableWords;
use App\Repository\LearnedWordsRepository;
use App\Repository\StuffRepository;
use App\Repository\UntranslatableWordsRepository;
use App\Vo\Word;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;

class StuffControllerService
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

    /**
     * @param Request $request
     * @param ObjectManager $em
     * @param int $stuffId
     * @param StuffRepository $stuffRepository
     */
    public function addWordsToDb(Request $request, ObjectManager $em, int $stuffId, StuffRepository $stuffRepository) : void
    {
        $stuff = $stuffRepository->findOneBy([
            'id' => $stuffId,
        ]);

        if ($request->request->get('learnedWords'))
        {
            foreach ($request->request->get('learnedWords') as $learnedWord) {
                $word = new LearnedWords();
                $word->setWord($learnedWord);
                $word->setIdLanguage($stuff->getLanguage());
                $em->persist($word);
            }
            $em->flush();
        }

        if ($request->request->get('untranslatableWords'))
        {
            foreach ($request->request->get('untranslatableWords') as $untranslatableWords) {
                $word = new UntranslatableWords();
                $word->setWord($untranslatableWords);
                $word->setIdLanguage($stuff->getLanguage());
                $em->persist($word);
            }
            $em->flush();
        }
    }
}