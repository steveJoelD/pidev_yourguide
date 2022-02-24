<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; 

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank (message ="description is required")
     */
    private $description_commentaire;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank (message ="date commentaire is required")
     */
    private $date_commentaire;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Like", inversedBy="commentaire")
     */
    private $like;

    public function getLike()
    {
        return $this->like;
    }

    public function setLike($like): void
    {
        $this->like = $like;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getDescriptionCommentaire(): ?string
    {
        return $this->description_commentaire;
    }

    public function setDescriptionCommentaire(string $description_commentaire): self
    {
        $this->description_commentaire = $description_commentaire;

        return $this;
    }

    public function getDateCommentaire(): ?string
    {
        return $this->date_commentaire;
    }

    public function setDateCommentaire(string $date_commentaire): self
    {
        $this->date_commentaire = $date_commentaire;

        return $this;
    }
    
}
