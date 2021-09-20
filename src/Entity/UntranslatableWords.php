<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UntranslatableWords
 *
 * @ORM\Table(name="untranslatable_words", uniqueConstraints={@ORM\UniqueConstraint(name="untranslatable_words_word_uindex", columns={"word"})}, indexes={@ORM\Index(name="untranslatable_words_languages_id_fk", columns={"id_language"})})
 * @ORM\Entity(repositoryClass="App\Repository\UntranslatableWordsRepository")
 */
class UntranslatableWords
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

    /**
     * @var Languages
     *
     * @ORM\ManyToOne(targetEntity="Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_language", referencedColumnName="id")
     * })
     */
    private $idLanguage;

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

    public function getIdLanguage(): ?Languages
    {
        return $this->idLanguage;
    }

    public function setLanguage(?Languages $idLanguage): self
    {
        $this->idLanguage = $idLanguage;

        return $this;
    }

    public function __toString(): string
    {
        return $this->word;
    }


}
