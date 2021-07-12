<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StuffType
 *
 * @ORM\Table(name="stuff_type", uniqueConstraints={@ORM\UniqueConstraint(name="stuff_type_name_uindex", columns={"name"})})
 * @ORM\Entity(repositoryClass="App\Repository\StuffTypeRepository")
 */
class StuffType
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
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

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


}
