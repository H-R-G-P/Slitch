<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Texts
 *
 * @ORM\Table(name="texts", uniqueConstraints={@ORM\UniqueConstraint(name="history_id_uindex", columns={"id"})})
 * @ORM\Entity(repositoryClass="App\Repository\TextsRepository")
 */
class Texts
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
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=0, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="preview", type="string", length=200, nullable=true)
     */
    private $preview;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getPreview(): ?string
    {
        return $this->preview;
    }

    public function setPreview(?string $preview): self
    {
        $this->preview = $preview;

        return $this;
    }


}
