<?php

namespace App\Entity;

use App\Repository\PairOfWordsRepository;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=PairOfWordsRepository::class)
 */
class PairOfWords
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private string $original;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private ?string $translation;

    /**
     * @ORM\ManyToOne(targetEntity=Stuff::class, inversedBy="pairsOfWords")
     */
    private Stuff $stuff;

    public function __construct(string $original, Stuff $stuff, ?string $translation=null)
    {
        $this->original = $original;
        $this->stuff = $stuff;
        $this->translation = $translation;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getOriginal(): string
    {
        return $this->original;
    }

    public function setOriginal(string $original): self
    {
        $this->original = $original;

        return $this;
    }

    public function getTranslation(): ?string
    {
        return $this->translation;
    }

    public function setTranslation(?string $translation): self
    {
        $this->translation = $translation;

        return $this;
    }

    public function getStuff(): Stuff
    {
        return $this->stuff;
    }

    public function setStuff(Stuff $stuff): self
    {
        $this->stuff = $stuff;

        return $this;
    }

    #[Pure] public function __toString(): string
    {
        return $this->getOriginal();
    }
}
