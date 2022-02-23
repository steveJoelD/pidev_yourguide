<?php

namespace App\Entity;

use App\Repository\GuideRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=GuideRepository::class)
 */
class Guide
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $nom;

    /**
     * @ORM\Column(type="bigint")
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "Numero de telephone ne depasse pas 8 caracteres",
     *      maxMessage = "Numero de telephone ne depasse pas 8 caracteres"
     * )
     */
    private $tel;

    /**
     * @ORM\ManyToOne(targetEntity=Activite::class, inversedBy="guides")
     */
    private $activite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getActivite(): ?Activite
    {
        return $this->activite;
    }

    public function setActivite(?Activite $activite): self
    {
        $this->activite = $activite;

        return $this;
    }
    public function __toString(): string
    {
        return $this->getNom();
    }
}
