<?php

namespace App\Entity;

use App\Repository\DictionaryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DictionaryRepository::class)
 */
class Dictionary
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\OneToOne(targetEntity=Stuff::class, inversedBy="dictionary", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false, unique=true)
     */
    private ?Stuff $stuff;

    /**
     * @ORM\OneToMany(targetEntity=PareOfWords::class, mappedBy="dictionary", orphanRemoval=true)
     *
     * @var Collection<int, PareOfWords>
     */
    private Collection $pareOfWords;

    public function __construct()
    {
        $this->pareOfWords = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStuff(): ?Stuff
    {
        return $this->stuff;
    }

    public function setStuff(Stuff $stuff): self
    {
        $this->stuff = $stuff;

        return $this;
    }

    /**
     * @return Collection<int, PareOfWords>
     */
    public function getPareOfWords(): Collection
    {
        return $this->pareOfWords;
    }

    public function addPareOfWord(PareOfWords $pareOfWord): self
    {
        if (!$this->pareOfWords->contains($pareOfWord)) {
            $this->pareOfWords[] = $pareOfWord;
            $pareOfWord->setDictionary($this);
        }

        return $this;
    }

    public function removePareOfWord(PareOfWords $pareOfWord): self
    {
        if ($this->pareOfWords->removeElement($pareOfWord)) {
            // set the owning side to null (unless already changed)
            if ($pareOfWord->getDictionary() === $this) {
                $pareOfWord->setDictionary(null);
            }
        }

        return $this;
    }
}
