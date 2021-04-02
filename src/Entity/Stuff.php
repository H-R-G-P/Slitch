<?php

namespace App\Entity;

use App\Repository\StuffRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StuffRepository::class)
 */
class Stuff
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year_of_issue;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="text")
     */
    private $words;

    /**
     * @ORM\Column(type="integer")
     */
    private $word_count;

    /**
     * @ORM\Column(type="integer")
     */
    private $number_of_views;

    /**
     * @ORM\Column(type="datetime")
     */
    private $added_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $created_with;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getYearOfIssue(): ?int
    {
        return $this->year_of_issue;
    }

    public function setYearOfIssue(?int $year_of_issue): self
    {
        $this->year_of_issue = $year_of_issue;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getWords(): ?string
    {
        return $this->words;
    }

    public function setWords(string $words): self
    {
        $this->words = $words;

        return $this;
    }

    public function getWordCount(): ?int
    {
        return $this->word_count;
    }

    public function setWordCount(int $word_count): self
    {
        $this->word_count = $word_count;

        return $this;
    }

    public function getNumberOfViews(): ?int
    {
        return $this->number_of_views;
    }

    public function setNumberOfViews(int $number_of_views): self
    {
        $this->number_of_views = $number_of_views;

        return $this;
    }

    public function getAddedAt(): ?\DateTimeInterface
    {
        return $this->added_at;
    }

    public function setAddedAt(\DateTimeInterface $added_at): self
    {
        $this->added_at = $added_at;

        return $this;
    }

    public function getCreatedWith(): ?int
    {
        return $this->created_with;
    }

    public function setCreatedWith(int $created_with): self
    {
        $this->created_with = $created_with;

        return $this;
    }
}
