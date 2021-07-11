<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnglishUntranslatablewords
 *
 * @ORM\Table(name="english_untranslatableWords", uniqueConstraints={@ORM\UniqueConstraint(name="english_notTranslatedWords_id_uindex", columns={"id"}), @ORM\UniqueConstraint(name="english_notTranslatedWords_word_uindex", columns={"word"})})
 * @ORM\Entity(repositoryClass="App\Repository\EnglishUntranslatablewordsRepository")
 */
class EnglishUntranslatablewords
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="word", type="string", length=25, nullable=false)
     */
    private $word;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function setWord(string $word): self
    {
        $this->word = $word;

        return $this;
    }


}
