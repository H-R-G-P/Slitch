<?php

namespace App\Entity;

use App\Repository\PareOfWordsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PareOfWordsRepository::class)
 */
class PareOfWords
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private ?string $original;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private ?string $translation;

    /**
     * @ORM\ManyToOne(targetEntity=Stuff::class, inversedBy="pareOfWords")
     */
    private $stuff;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOriginal(): ?string
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

    public function getStuff(): ?Stuff
    {
        return $this->stuff;
    }

    public function setStuff(?Stuff $stuff): self
    {
        $this->stuff = $stuff;

        return $this;
    }
}
