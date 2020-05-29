<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
*/

/*
@UniqueEntity(
 * fields={"mail"},
 * message="le nom de compte indiqué existe déjà !"
 *)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\Length(min="8", minMessage="Votre mot de passe doit faire minimum 8 caractères")
     */

    private $password;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $activation_token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="date", nullable=true)
     */


    private $dateModification;

    /**
     * @ORM\Column(type="date")
     */


    private $dateExpiration;

    /**
     * @ORM\Column(type="json")
     */
    private $role = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


   public function eraseCredentials(){}
   public function getSalt(){}
   public function getRoles(){return ['ROLE_USER'];}

   public function getActivationToken(): ?string
   {
       return $this->activation_token;
   }

   public function setActivationToken(?string $activation_token): self
   {
       $this->activation_token = $activation_token;

       return $this;
   }

   public function getMail(): ?string
   {
       return $this->mail;
   }

   public function setMail(?string $mail): self
   {
       $this->mail = $mail;

       return $this;
   }

   public function getDateModification(): ?\DateTimeInterface
   {
       return $this->dateModification;
   }

   public function setDateModification(?\DateTimeInterface $dateModification): self
   {
       $this->dateModification = $dateModification;

       return $this;
   }

   public function getDateExpiration(): ?\DateTimeInterface
   {
       return $this->dateExpiration;
   }

   public function setDateExpiration(\DateTimeInterface $dateExpiration): self
   {
       $this->dateExpiration = $dateExpiration;

       return $this;
   }

   public function getRole(): ?array
   {
       return $this->role;
   }

   public function setRole(array $role): self
   {
       $this->role = $role;

       return $this;
   }
}
