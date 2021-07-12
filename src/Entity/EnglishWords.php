<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnglishWords
 *
 * @ORM\Table(name="english_words", uniqueConstraints={@ORM\UniqueConstraint(name="words_word_uindex", columns={"word"})}, indexes={@ORM\Index(name="words_id_index", columns={"id"})})
 * @ORM\Entity(repositoryClass="App\Repository\EnglishWordsRepository")
 */
class EnglishWords
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

    public function __toString()
    {
        return $this->word;
    }


}
