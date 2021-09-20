<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Stuff
 *
 * @ORM\Table(name="stuff", uniqueConstraints={@ORM\UniqueConstraint(name="stuff_id_uindex", columns={"id"})}, indexes={@ORM\Index(name="stuff_languages_id_fk", columns={"language_id"}), @ORM\Index(name="stuff_stuff_type_id_fk", columns={"type_id"}), @ORM\Index(name="stuff_users_id_fk", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\StuffRepository")
 */
class Stuff
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year_of_issue", type="integer", nullable=true)
     */
    private $yearOfIssue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=16777215, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="words", type="text", length=16777215, nullable=false, options={"comment"="Words separated by spaces"})
     */
    private $words;

    /**
     * @var int
     *
     * @ORM\Column(name="word_count", type="integer", nullable=false)
     */
    private $wordCount;

    /**
     * @var int
     *
     * @ORM\Column(name="number_of_views", type="integer", nullable=false)
     */
    private $numberOfViews = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $addedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var Languages
     *
     * @ORM\ManyToOne(targetEntity="Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    private $language;

    /**
     * @var StuffType
     *
     * @ORM\ManyToOne(targetEntity="StuffType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     */
    private $uniq_word_count;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $hasDelimiters;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isHandled;

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
        return $this->yearOfIssue;
    }

    public function setYearOfIssue(?int $yearOfIssue): self
    {
        $this->yearOfIssue = $yearOfIssue;

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
        return $this->wordCount;
    }

    public function setWordCount(int $wordCount): self
    {
        $this->wordCount = $wordCount;

        return $this;
    }

    public function getNumberOfViews(): ?int
    {
        return $this->numberOfViews;
    }

    public function setNumberOfViews(int $numberOfViews): self
    {
        $this->numberOfViews = $numberOfViews;

        return $this;
    }

    public function getAddedAt(): ?\DateTimeInterface
    {
        return $this->addedAt;
    }

    public function setAddedAt(\DateTimeInterface $addedAt): self
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    public function getLanguage(): ?Languages
    {
        return $this->language;
    }

    public function setLanguage(?Languages $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getType(): ?StuffType
    {
        return $this->type;
    }

    public function setType(?StuffType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getUniqWordCount(): ?int
    {
        return $this->uniq_word_count;
    }

    public function setUniqWordCount(int $uniq_word_count): self
    {
        $this->uniq_word_count = $uniq_word_count;

        return $this;
    }

    public function getHasDelimiters(): bool
    {
        return $this->hasDelimiters;
    }

    public function setHasDelimiters(bool $hasDelimiters): self
    {
        $this->hasDelimiters = $hasDelimiters;

        return $this;
    }

    public function getIsHandled(): ?bool
    {
        return $this->isHandled;
    }

    public function setIsHandled(?bool $isHandled): self
    {
        $this->isHandled = $isHandled;

        return $this;
    }


}
