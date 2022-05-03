<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
    private int $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private string $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year_of_issue", type="integer", nullable=true)
     */
    private ?int $yearOfIssue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=true)
     */
    private ?string $description;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=16777215, nullable=false)
     */
    private string $text;

    /**
     * @var string
     *
     * @ORM\Column(name="words", type="text", length=16777215, nullable=false, options={"comment"="Words separated by spaces"})
     */
    private string $words;

    /**
     * @var int
     *
     * @ORM\Column(name="word_count", type="integer", nullable=false)
     */
    private int $wordCount;

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
    private Languages $language;

    /**
     * @var StuffType
     *
     * @ORM\ManyToOne(targetEntity="StuffType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private StuffType $type;

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
    private ?int $uniq_word_count;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private bool $hasDelimiters;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private ?bool $hasDictionary;

    /**
     * @ORM\OneToMany(targetEntity=PairOfWords::class, mappedBy="stuff")
     *
     * @var Collection<int, PairOfWords> $pairsOfWords
     */
    private Collection $pairsOfWords;

    public function __construct()
    {
        $this->pairsOfWords = new ArrayCollection();
    }

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

    public function getText(): string
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

    public function getAddedAt(): ?DateTimeInterface
    {
        return $this->addedAt;
    }

    public function setAddedAt(DateTimeInterface $addedAt): self
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    public function getLanguage(): Languages
    {
        return $this->language;
    }

    public function setLanguage(Languages $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getType(): StuffType
    {
        return $this->type;
    }

    public function setType(StuffType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUser(): Users
    {
        return $this->user;
    }

    public function setUser(Users $user): self
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

    public function getHasDictionary(): ?bool
    {
        return $this->hasDictionary;
    }

    public function setHasDictionary(?bool $hasDictionary): self
    {
        $this->hasDictionary = $hasDictionary;

        return $this;
    }

    /**
     * @return Collection<int, PairOfWords>
     */
    public function getPairsOfWords(): Collection
    {
        return $this->pairsOfWords;
    }

    public function addPairOfWord(PairOfWords $pareOfWord): self
    {
        if (!$this->pairsOfWords->contains($pareOfWord)) {
            $this->pairsOfWords[] = $pareOfWord;
            $pareOfWord->setStuff($this);
        }

        return $this;
    }

    public function removePairOfWord(PairOfWords $pareOfWord): self
    {
        if ($this->pairsOfWords->removeElement($pareOfWord)) {
            // set the owning side to null (unless already changed)
            if ($pareOfWord->getStuff() === $this) {
                $pareOfWord->setStuff(null);
            }
        }

        return $this;
    }


}
