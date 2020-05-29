<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErheaListvalues
 *
 * @ORM\Table(name="erhea_listvalues")
 * @ORM\Entity(repositoryClass="App\Repository\ErheaListvaluesRepository")
 */
class ErheaListvalues
{
    /**
     * @var int
     *
     * @ORM\Column(name="technicKey", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $technickey;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codelang", type="string", length=255, nullable=true)
     */
    private $codelang;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(name="enable", type="boolean", nullable=false, options={"default"="1"})
     */
    private $enable = '1';

    public function getTechnickey(): ?int
    {
        return $this->technickey;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCodelang(): ?string
    {
        return $this->codelang;
    }

    public function setCodelang(?string $codelang): self
    {
        $this->codelang = $codelang;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }


}
