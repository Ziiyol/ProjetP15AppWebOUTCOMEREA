<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="ADMINISTRATEUR")
 * @ORM\Entity(repositoryClass="App\Repository\AdministrateurRepository")
 */
class Administrateur
{
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
