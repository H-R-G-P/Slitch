<?php


namespace App\Service;


use App\Entity\LearnedWords;
use App\Entity\PairOfWords;
use App\Entity\Stuff;
use App\Entity\UntranslatableWords;
use Doctrine\Persistence\ObjectManager;
use JetBrains\PhpStorm\Pure;

class FilterService
{
    private Helper $helper;
    private ObjectManager $em;
    private Stuff $stuff;

    /**
     * FilterService constructor.
     * @param ObjectManager $em
     * @param Stuff $stuff
     */
    #[Pure] public function __construct(ObjectManager $em, Stuff $stuff)
    {
        $this->em = $em;
        $this->stuff = $stuff;
        $this->helper = new Helper();
    }

    /**
     * @return array<PairOfWords>
     */
    public function getNotLearnWords() : array
    {
        $pairOfWords = $this->stuff->getPairsOfWords()->toArray();
        $learnedWords = $this->em->getRepository(LearnedWords::class)->findAll();
        $noTransWords = $this->em->getRepository(UntranslatableWords::class)->findAll();

        return $this->helper->array_diff_inLowercase($pairOfWords, $learnedWords, $noTransWords);
    }
}