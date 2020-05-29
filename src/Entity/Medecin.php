<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecin
 *
 * @ORM\Table(name="MEDECIN")
 * @ORM\Entity(repositoryClass="App\Repository\MedecinRepository")
 */
class Medecin
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Centre", type="string", length=32, nullable=false)
     */
    private $centre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateReinitMDP", type="date", nullable=true)
     */
    private $datereinitmdp;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Login", referencedColumnName="Login")
     * })
     */
    private $login;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCentre(): ?string
    {
        return $this->centre;
    }

    public function setCentre(string $centre): self
    {
        $this->centre = $centre;

        return $this;
    }

    public function getDatereinitmdp(): ?\DateTimeInterface
    {
        return $this->datereinitmdp;
    }

    public function setDatereinitmdp(?\DateTimeInterface $datereinitmdp): self
    {
        $this->datereinitmdp = $datereinitmdp;

        return $this;
    }

    public function getLogin(): ?Utilisateur
    {
        return $this->login;
    }

    public function setLogin(?Utilisateur $login): self
    {
        $this->login = $login;

        return $this;
    }


}
