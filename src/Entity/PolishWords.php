<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PolishWords
 *
 * @ORM\Table(name="polish_words", uniqueConstraints={@ORM\UniqueConstraint(name="PL_words_id_uindex", columns={"id"})})
 * @ORM\Entity(repositoryClass="App\Repository\PolishWordsRepository")
 */
class PolishWords
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