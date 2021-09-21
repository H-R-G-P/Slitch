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
     * @ORM\ManyToOne(targetEntity=Dictionary::class, inversedBy="pareOfWords")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Dictionary $dictionary;

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

    public function getDictionary(): ?Dictionary
    {
        return $this->dictionary;
    }

    public function setDictionary(?Dictionary $dictionary): self
    {
        $this->dictionary = $dictionary;

        return $this;
    }
}
