<?php


namespace App\Service;


use App\Entity\LearnedWords;
use App\Entity\PairOfWords;
use App\Entity\Stuff;
use App\Entity\UntranslatableWords;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManager;
use JetBrains\PhpStorm\Pure;

class FilterService
{
    private Helper $helper;
    private EntityManager $em;
    private Stuff $stuff;

    /**
     * FilterService constructor.
     * @param EntityManager $em
     * @param Stuff $stuff
     */
    #[Pure] public function __construct(EntityManager $em, Stuff $stuff)
    {
        $this->em = $em;
        $this->stuff = $stuff;
        $this->helper = new Helper();
    }

    /**
     * @return Collection<PairOfWords>
     */
    public function getNotLearnWords() : Collection
    {
        $pairOfWords = $this->stuff->getPairsOfWords();
        $learnedWords = $this->em->getRepository(LearnedWords::class)->findAll();
        $noTransWords = $this->em->getRepository(UntranslatableWords::class)->findAll();

        return $this->helper->array_diff_inLowercase($pairOfWords, $learnedWords, $noTransWords);
    }
}