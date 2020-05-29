<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErheaInitdata
 *
 * @ORM\Table(name="erhea_initdata")
 * @ORM\Entity(repositoryClass="App\Repository\ErheaInitdataRepository")
 */
class ErheaInitdata
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
     * @var int
     *
     * @ORM\Column(name="idpatient", type="integer", nullable=false)
     */
    private $idpatient;

    /**
     * @var int
     *
     * @ORM\Column(name="idunitfct", type="integer", nullable=false)
     */
    private $idunitfct;

    /**
     * @var int
     *
     * @ORM\Column(name="idvisit", type="integer", nullable=false)
     */
    private $idvisit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numadmin", type="integer", nullable=true)
     */
    private $numadmin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="agepat", type="integer", nullable=true)
     */
    private $agepat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sexepat", type="string", length=255, nullable=true)
     */
    private $sexepat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poidspat", type="decimal", precision=4, scale=1, nullable=true)
     */
    private $poidspat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="taillepat", type="integer", nullable=true)
     */
    private $taillepat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ethpat", type="string", length=255, nullable=true)
     */
    private $ethpat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="obesepat", type="string", length=255, nullable=true)
     */
    private $obesepat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tabacpat", type="string", length=255, nullable=true)
     */
    private $tabacpat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="toxicopat", type="string", length=255, nullable=true)
     */
    private $toxicopat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="isDc", type="integer", nullable=true)
     */
    private $isdc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtDc", type="date", nullable=true)
     */
    private $dtdc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="csDc", type="integer", nullable=true)
     */
    private $csdc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sympprinc", type="integer", nullable=true)
     */
    private $sympprinc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="diaginprinc1", type="integer", nullable=true)
     */
    private $diaginprinc1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="diaginprinc2", type="integer", nullable=true)
     */
    private $diaginprinc2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="diaginprinc3", type="integer", nullable=true)
     */
    private $diaginprinc3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="diaginprinc4", type="integer", nullable=true)
     */
    private $diaginprinc4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="diagsortieprinc1", type="integer", nullable=true)
     */
    private $diagsortieprinc1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="diagsortieprinc2", type="integer", nullable=true)
     */
    private $diagsortieprinc2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="diagsortieprinc3", type="integer", nullable=true)
     */
    private $diagsortieprinc3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="diagsortieprinc4", type="integer", nullable=true)
     */
    private $diagsortieprinc4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diagprincth1", type="string", length=255, nullable=true)
     */
    private $diagprincth1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diagprincth2", type="string", length=255, nullable=true)
     */
    private $diagprincth2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tpmal", type="integer", nullable=true)
     */
    private $tpmal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="altemeier1", type="integer", nullable=true)
     */
    private $altemeier1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="altemeier2", type="integer", nullable=true)
     */
    private $altemeier2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="iss", type="integer", nullable=true)
     */
    private $iss;

    /**
     * @var int|null
     *
     * @ORM\Column(name="diabete", type="integer", nullable=true)
     */
    private $diabete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="immunodep", type="string", length=255, nullable=true)
     */
    private $immunodep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="knaus", type="string", length=255, nullable=true)
     */
    private $knaus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minfc", type="integer", nullable=true)
     */
    private $minfc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxfc", type="integer", nullable=true)
     */
    private $maxfc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minta", type="integer", nullable=true)
     */
    private $minta;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxta", type="integer", nullable=true)
     */
    private $maxta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mintemp", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $mintemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maxtemp", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $maxtemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uree", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $uree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unituree", type="integer", nullable=true)
     */
    private $unituree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bilirubine", type="integer", nullable=true)
     */
    private $bilirubine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unitbilirubine", type="string", length=255, nullable=true)
     */
    private $unitbilirubine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pio2", type="decimal", precision=4, scale=1, nullable=true)
     */
    private $pio2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fio2", type="integer", nullable=true)
     */
    private $fio2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rappio2fio2", type="string", length=255, nullable=true)
     */
    private $rappio2fio2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deburin", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $deburin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minleuco", type="integer", nullable=true)
     */
    private $minleuco;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxleuco", type="integer", nullable=true)
     */
    private $maxleuco;

    /**
     * @var string|null
     *
     * @ORM\Column(name="minkal", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $minkal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maxkal", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $maxkal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="minnat", type="decimal", precision=4, scale=1, nullable=true)
     */
    private $minnat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maxnat", type="decimal", precision=4, scale=1, nullable=true)
     */
    private $maxnat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hco3", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $hco3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="glasgow", type="integer", nullable=true)
     */
    private $glasgow;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cdsaps", type="integer", nullable=true)
     */
    private $cdsaps;

    /**
     * @var int|null
     *
     * @ORM\Column(name="saps2", type="integer", nullable=true)
     */
    private $saps2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ventilmeca", type="integer", nullable=true)
     */
    private $ventilmeca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="srvprov", type="string", length=255, nullable=true)
     */
    private $srvprov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medprov", type="string", length=255, nullable=true)
     */
    private $medprov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="srvout", type="string", length=255, nullable=true)
     */
    private $srvout;

    /**
     * @var int|null
     *
     * @ORM\Column(name="descsortie", type="integer", nullable=true)
     */
    private $descsortie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adl0", type="string", length=255, nullable=true)
     */
    private $adl0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adl1", type="string", length=255, nullable=true)
     */
    private $adl1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adl2", type="string", length=255, nullable=true)
     */
    private $adl2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adl3", type="string", length=255, nullable=true)
     */
    private $adl3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adl4", type="string", length=255, nullable=true)
     */
    private $adl4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adl5", type="string", length=255, nullable=true)
     */
    private $adl5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adl6", type="string", length=255, nullable=true)
     */
    private $adl6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adlresult", type="integer", nullable=true)
     */
    private $adlresult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cheartfailure", type="string", length=255, nullable=true)
     */
    private $cheartfailure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cdemence", type="string", length=255, nullable=true)
     */
    private $cdemence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmalchropulm", type="string", length=255, nullable=true)
     */
    private $cmalchropulm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmalrhu", type="string", length=255, nullable=true)
     */
    private $cmalrhu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmalhepamoy", type="string", length=255, nullable=true)
     */
    private $cmalhepamoy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cdiabete", type="string", length=255, nullable=true)
     */
    private $cdiabete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chemiplegie", type="string", length=255, nullable=true)
     */
    private $chemiplegie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmalrenale", type="string", length=255, nullable=true)
     */
    private $cmalrenale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmalmaligne", type="string", length=255, nullable=true)
     */
    private $cmalmaligne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cmalhepasevere", type="string", length=255, nullable=true)
     */
    private $cmalhepasevere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ctumeur", type="string", length=255, nullable=true)
     */
    private $ctumeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cvih", type="string", length=255, nullable=true)
     */
    private $cvih;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cinfarctus", type="string", length=255, nullable=true)
     */
    private $cinfarctus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cvascperi", type="string", length=255, nullable=true)
     */
    private $cvascperi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cvasccere", type="string", length=255, nullable=true)
     */
    private $cvasccere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="culcere", type="string", length=255, nullable=true)
     */
    private $culcere;

    /**
     * @var int|null
     *
     * @ORM\Column(name="charlsonresult", type="integer", nullable=true)
     */
    private $charlsonresult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etatsantepre", type="text", length=0, nullable=true)
     */
    private $etatsantepre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="evorsr", type="text", length=0, nullable=true)
     */
    private $evorsr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conclusion", type="text", length=0, nullable=true)
     */
    private $conclusion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="histoire", type="text", length=0, nullable=true)
     */
    private $histoire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="clinique", type="text", length=0, nullable=true)
     */
    private $clinique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="concentree", type="text", length=0, nullable=true)
     */
    private $concentree;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdpatient(): ?int
    {
        return $this->idpatient;
    }

    public function setIdpatient(int $idpatient): self
    {
        $this->idpatient = $idpatient;

        return $this;
    }

    public function getIdunitfct(): ?int
    {
        return $this->idunitfct;
    }

    public function setIdunitfct(int $idunitfct): self
    {
        $this->idunitfct = $idunitfct;

        return $this;
    }

    public function getIdvisit(): ?int
    {
        return $this->idvisit;
    }

    public function setIdvisit(int $idvisit): self
    {
        $this->idvisit = $idvisit;

        return $this;
    }

    public function getNumadmin(): ?int
    {
        return $this->numadmin;
    }

    public function setNumadmin(?int $numadmin): self
    {
        $this->numadmin = $numadmin;

        return $this;
    }

    public function getAgepat(): ?int
    {
        return $this->agepat;
    }

    public function setAgepat(?int $agepat): self
    {
        $this->agepat = $agepat;

        return $this;
    }

    public function getSexepat(): ?string
    {
        return $this->sexepat;
    }

    public function setSexepat(?string $sexepat): self
    {
        $this->sexepat = $sexepat;

        return $this;
    }

    public function getPoidspat(): ?string
    {
        return $this->poidspat;
    }

    public function setPoidspat(?string $poidspat): self
    {
        $this->poidspat = $poidspat;

        return $this;
    }

    public function getTaillepat(): ?int
    {
        return $this->taillepat;
    }

    public function setTaillepat(?int $taillepat): self
    {
        $this->taillepat = $taillepat;

        return $this;
    }

    public function getEthpat(): ?string
    {
        return $this->ethpat;
    }

    public function setEthpat(?string $ethpat): self
    {
        $this->ethpat = $ethpat;

        return $this;
    }

    public function getObesepat(): ?string
    {
        return $this->obesepat;
    }

    public function setObesepat(?string $obesepat): self
    {
        $this->obesepat = $obesepat;

        return $this;
    }

    public function getTabacpat(): ?string
    {
        return $this->tabacpat;
    }

    public function setTabacpat(?string $tabacpat): self
    {
        $this->tabacpat = $tabacpat;

        return $this;
    }

    public function getToxicopat(): ?string
    {
        return $this->toxicopat;
    }

    public function setToxicopat(?string $toxicopat): self
    {
        $this->toxicopat = $toxicopat;

        return $this;
    }

    public function getIsdc(): ?int
    {
        return $this->isdc;
    }

    public function setIsdc(?int $isdc): self
    {
        $this->isdc = $isdc;

        return $this;
    }

    public function getDtdc(): ?\DateTimeInterface
    {
        return $this->dtdc;
    }

    public function setDtdc(?\DateTimeInterface $dtdc): self
    {
        $this->dtdc = $dtdc;

        return $this;
    }

    public function getCsdc(): ?int
    {
        return $this->csdc;
    }

    public function setCsdc(?int $csdc): self
    {
        $this->csdc = $csdc;

        return $this;
    }

    public function getSympprinc(): ?int
    {
        return $this->sympprinc;
    }

    public function setSympprinc(?int $sympprinc): self
    {
        $this->sympprinc = $sympprinc;

        return $this;
    }

    public function getDiaginprinc1(): ?int
    {
        return $this->diaginprinc1;
    }

    public function setDiaginprinc1(?int $diaginprinc1): self
    {
        $this->diaginprinc1 = $diaginprinc1;

        return $this;
    }

    public function getDiaginprinc2(): ?int
    {
        return $this->diaginprinc2;
    }

    public function setDiaginprinc2(?int $diaginprinc2): self
    {
        $this->diaginprinc2 = $diaginprinc2;

        return $this;
    }

    public function getDiaginprinc3(): ?int
    {
        return $this->diaginprinc3;
    }

    public function setDiaginprinc3(?int $diaginprinc3): self
    {
        $this->diaginprinc3 = $diaginprinc3;

        return $this;
    }

    public function getDiaginprinc4(): ?int
    {
        return $this->diaginprinc4;
    }

    public function setDiaginprinc4(?int $diaginprinc4): self
    {
        $this->diaginprinc4 = $diaginprinc4;

        return $this;
    }

    public function getDiagsortieprinc1(): ?int
    {
        return $this->diagsortieprinc1;
    }

    public function setDiagsortieprinc1(?int $diagsortieprinc1): self
    {
        $this->diagsortieprinc1 = $diagsortieprinc1;

        return $this;
    }

    public function getDiagsortieprinc2(): ?int
    {
        return $this->diagsortieprinc2;
    }

    public function setDiagsortieprinc2(?int $diagsortieprinc2): self
    {
        $this->diagsortieprinc2 = $diagsortieprinc2;

        return $this;
    }

    public function getDiagsortieprinc3(): ?int
    {
        return $this->diagsortieprinc3;
    }

    public function setDiagsortieprinc3(?int $diagsortieprinc3): self
    {
        $this->diagsortieprinc3 = $diagsortieprinc3;

        return $this;
    }

    public function getDiagsortieprinc4(): ?int
    {
        return $this->diagsortieprinc4;
    }

    public function setDiagsortieprinc4(?int $diagsortieprinc4): self
    {
        $this->diagsortieprinc4 = $diagsortieprinc4;

        return $this;
    }

    public function getDiagprincth1(): ?string
    {
        return $this->diagprincth1;
    }

    public function setDiagprincth1(?string $diagprincth1): self
    {
        $this->diagprincth1 = $diagprincth1;

        return $this;
    }

    public function getDiagprincth2(): ?string
    {
        return $this->diagprincth2;
    }

    public function setDiagprincth2(?string $diagprincth2): self
    {
        $this->diagprincth2 = $diagprincth2;

        return $this;
    }

    public function getTpmal(): ?int
    {
        return $this->tpmal;
    }

    public function setTpmal(?int $tpmal): self
    {
        $this->tpmal = $tpmal;

        return $this;
    }

    public function getAltemeier1(): ?int
    {
        return $this->altemeier1;
    }

    public function setAltemeier1(?int $altemeier1): self
    {
        $this->altemeier1 = $altemeier1;

        return $this;
    }

    public function getAltemeier2(): ?int
    {
        return $this->altemeier2;
    }

    public function setAltemeier2(?int $altemeier2): self
    {
        $this->altemeier2 = $altemeier2;

        return $this;
    }

    public function getIss(): ?int
    {
        return $this->iss;
    }

    public function setIss(?int $iss): self
    {
        $this->iss = $iss;

        return $this;
    }

    public function getDiabete(): ?int
    {
        return $this->diabete;
    }

    public function setDiabete(?int $diabete): self
    {
        $this->diabete = $diabete;

        return $this;
    }

    public function getImmunodep(): ?string
    {
        return $this->immunodep;
    }

    public function setImmunodep(?string $immunodep): self
    {
        $this->immunodep = $immunodep;

        return $this;
    }

    public function getKnaus(): ?string
    {
        return $this->knaus;
    }

    public function setKnaus(?string $knaus): self
    {
        $this->knaus = $knaus;

        return $this;
    }

    public function getMinfc(): ?int
    {
        return $this->minfc;
    }

    public function setMinfc(?int $minfc): self
    {
        $this->minfc = $minfc;

        return $this;
    }

    public function getMaxfc(): ?int
    {
        return $this->maxfc;
    }

    public function setMaxfc(?int $maxfc): self
    {
        $this->maxfc = $maxfc;

        return $this;
    }

    public function getMinta(): ?int
    {
        return $this->minta;
    }

    public function setMinta(?int $minta): self
    {
        $this->minta = $minta;

        return $this;
    }

    public function getMaxta(): ?int
    {
        return $this->maxta;
    }

    public function setMaxta(?int $maxta): self
    {
        $this->maxta = $maxta;

        return $this;
    }

    public function getMintemp(): ?string
    {
        return $this->mintemp;
    }

    public function setMintemp(?string $mintemp): self
    {
        $this->mintemp = $mintemp;

        return $this;
    }

    public function getMaxtemp(): ?string
    {
        return $this->maxtemp;
    }

    public function setMaxtemp(?string $maxtemp): self
    {
        $this->maxtemp = $maxtemp;

        return $this;
    }

    public function getUree(): ?string
    {
        return $this->uree;
    }

    public function setUree(?string $uree): self
    {
        $this->uree = $uree;

        return $this;
    }

    public function getUnituree(): ?int
    {
        return $this->unituree;
    }

    public function setUnituree(?int $unituree): self
    {
        $this->unituree = $unituree;

        return $this;
    }

    public function getBilirubine(): ?int
    {
        return $this->bilirubine;
    }

    public function setBilirubine(?int $bilirubine): self
    {
        $this->bilirubine = $bilirubine;

        return $this;
    }

    public function getUnitbilirubine(): ?string
    {
        return $this->unitbilirubine;
    }

    public function setUnitbilirubine(?string $unitbilirubine): self
    {
        $this->unitbilirubine = $unitbilirubine;

        return $this;
    }

    public function getPio2(): ?string
    {
        return $this->pio2;
    }

    public function setPio2(?string $pio2): self
    {
        $this->pio2 = $pio2;

        return $this;
    }

    public function getFio2(): ?int
    {
        return $this->fio2;
    }

    public function setFio2(?int $fio2): self
    {
        $this->fio2 = $fio2;

        return $this;
    }

    public function getRappio2fio2(): ?string
    {
        return $this->rappio2fio2;
    }

    public function setRappio2fio2(?string $rappio2fio2): self
    {
        $this->rappio2fio2 = $rappio2fio2;

        return $this;
    }

    public function getDeburin(): ?string
    {
        return $this->deburin;
    }

    public function setDeburin(?string $deburin): self
    {
        $this->deburin = $deburin;

        return $this;
    }

    public function getMinleuco(): ?int
    {
        return $this->minleuco;
    }

    public function setMinleuco(?int $minleuco): self
    {
        $this->minleuco = $minleuco;

        return $this;
    }

    public function getMaxleuco(): ?int
    {
        return $this->maxleuco;
    }

    public function setMaxleuco(?int $maxleuco): self
    {
        $this->maxleuco = $maxleuco;

        return $this;
    }

    public function getMinkal(): ?string
    {
        return $this->minkal;
    }

    public function setMinkal(?string $minkal): self
    {
        $this->minkal = $minkal;

        return $this;
    }

    public function getMaxkal(): ?string
    {
        return $this->maxkal;
    }

    public function setMaxkal(?string $maxkal): self
    {
        $this->maxkal = $maxkal;

        return $this;
    }

    public function getMinnat(): ?string
    {
        return $this->minnat;
    }

    public function setMinnat(?string $minnat): self
    {
        $this->minnat = $minnat;

        return $this;
    }

    public function getMaxnat(): ?string
    {
        return $this->maxnat;
    }

    public function setMaxnat(?string $maxnat): self
    {
        $this->maxnat = $maxnat;

        return $this;
    }

    public function getHco3(): ?string
    {
        return $this->hco3;
    }

    public function setHco3(?string $hco3): self
    {
        $this->hco3 = $hco3;

        return $this;
    }

    public function getGlasgow(): ?int
    {
        return $this->glasgow;
    }

    public function setGlasgow(?int $glasgow): self
    {
        $this->glasgow = $glasgow;

        return $this;
    }

    public function getCdsaps(): ?int
    {
        return $this->cdsaps;
    }

    public function setCdsaps(?int $cdsaps): self
    {
        $this->cdsaps = $cdsaps;

        return $this;
    }

    public function getSaps2(): ?int
    {
        return $this->saps2;
    }

    public function setSaps2(?int $saps2): self
    {
        $this->saps2 = $saps2;

        return $this;
    }

    public function getVentilmeca(): ?int
    {
        return $this->ventilmeca;
    }

    public function setVentilmeca(?int $ventilmeca): self
    {
        $this->ventilmeca = $ventilmeca;

        return $this;
    }

    public function getSrvprov(): ?string
    {
        return $this->srvprov;
    }

    public function setSrvprov(?string $srvprov): self
    {
        $this->srvprov = $srvprov;

        return $this;
    }

    public function getMedprov(): ?string
    {
        return $this->medprov;
    }

    public function setMedprov(?string $medprov): self
    {
        $this->medprov = $medprov;

        return $this;
    }

    public function getSrvout(): ?string
    {
        return $this->srvout;
    }

    public function setSrvout(?string $srvout): self
    {
        $this->srvout = $srvout;

        return $this;
    }

    public function getDescsortie(): ?int
    {
        return $this->descsortie;
    }

    public function setDescsortie(?int $descsortie): self
    {
        $this->descsortie = $descsortie;

        return $this;
    }

    public function getAdl0(): ?string
    {
        return $this->adl0;
    }

    public function setAdl0(?string $adl0): self
    {
        $this->adl0 = $adl0;

        return $this;
    }

    public function getAdl1(): ?string
    {
        return $this->adl1;
    }

    public function setAdl1(?string $adl1): self
    {
        $this->adl1 = $adl1;

        return $this;
    }

    public function getAdl2(): ?string
    {
        return $this->adl2;
    }

    public function setAdl2(?string $adl2): self
    {
        $this->adl2 = $adl2;

        return $this;
    }

    public function getAdl3(): ?string
    {
        return $this->adl3;
    }

    public function setAdl3(?string $adl3): self
    {
        $this->adl3 = $adl3;

        return $this;
    }

    public function getAdl4(): ?string
    {
        return $this->adl4;
    }

    public function setAdl4(?string $adl4): self
    {
        $this->adl4 = $adl4;

        return $this;
    }

    public function getAdl5(): ?string
    {
        return $this->adl5;
    }

    public function setAdl5(?string $adl5): self
    {
        $this->adl5 = $adl5;

        return $this;
    }

    public function getAdl6(): ?string
    {
        return $this->adl6;
    }

    public function setAdl6(?string $adl6): self
    {
        $this->adl6 = $adl6;

        return $this;
    }

    public function getAdlresult(): ?int
    {
        return $this->adlresult;
    }

    public function setAdlresult(?int $adlresult): self
    {
        $this->adlresult = $adlresult;

        return $this;
    }

    public function getCheartfailure(): ?string
    {
        return $this->cheartfailure;
    }

    public function setCheartfailure(?string $cheartfailure): self
    {
        $this->cheartfailure = $cheartfailure;

        return $this;
    }

    public function getCdemence(): ?string
    {
        return $this->cdemence;
    }

    public function setCdemence(?string $cdemence): self
    {
        $this->cdemence = $cdemence;

        return $this;
    }

    public function getCmalchropulm(): ?string
    {
        return $this->cmalchropulm;
    }

    public function setCmalchropulm(?string $cmalchropulm): self
    {
        $this->cmalchropulm = $cmalchropulm;

        return $this;
    }

    public function getCmalrhu(): ?string
    {
        return $this->cmalrhu;
    }

    public function setCmalrhu(?string $cmalrhu): self
    {
        $this->cmalrhu = $cmalrhu;

        return $this;
    }

    public function getCmalhepamoy(): ?string
    {
        return $this->cmalhepamoy;
    }

    public function setCmalhepamoy(?string $cmalhepamoy): self
    {
        $this->cmalhepamoy = $cmalhepamoy;

        return $this;
    }

    public function getCdiabete(): ?string
    {
        return $this->cdiabete;
    }

    public function setCdiabete(?string $cdiabete): self
    {
        $this->cdiabete = $cdiabete;

        return $this;
    }

    public function getChemiplegie(): ?string
    {
        return $this->chemiplegie;
    }

    public function setChemiplegie(?string $chemiplegie): self
    {
        $this->chemiplegie = $chemiplegie;

        return $this;
    }

    public function getCmalrenale(): ?string
    {
        return $this->cmalrenale;
    }

    public function setCmalrenale(?string $cmalrenale): self
    {
        $this->cmalrenale = $cmalrenale;

        return $this;
    }

    public function getCmalmaligne(): ?string
    {
        return $this->cmalmaligne;
    }

    public function setCmalmaligne(?string $cmalmaligne): self
    {
        $this->cmalmaligne = $cmalmaligne;

        return $this;
    }

    public function getCmalhepasevere(): ?string
    {
        return $this->cmalhepasevere;
    }

    public function setCmalhepasevere(?string $cmalhepasevere): self
    {
        $this->cmalhepasevere = $cmalhepasevere;

        return $this;
    }

    public function getCtumeur(): ?string
    {
        return $this->ctumeur;
    }

    public function setCtumeur(?string $ctumeur): self
    {
        $this->ctumeur = $ctumeur;

        return $this;
    }

    public function getCvih(): ?string
    {
        return $this->cvih;
    }

    public function setCvih(?string $cvih): self
    {
        $this->cvih = $cvih;

        return $this;
    }

    public function getCinfarctus(): ?string
    {
        return $this->cinfarctus;
    }

    public function setCinfarctus(?string $cinfarctus): self
    {
        $this->cinfarctus = $cinfarctus;

        return $this;
    }

    public function getCvascperi(): ?string
    {
        return $this->cvascperi;
    }

    public function setCvascperi(?string $cvascperi): self
    {
        $this->cvascperi = $cvascperi;

        return $this;
    }

    public function getCvasccere(): ?string
    {
        return $this->cvasccere;
    }

    public function setCvasccere(?string $cvasccere): self
    {
        $this->cvasccere = $cvasccere;

        return $this;
    }

    public function getCulcere(): ?string
    {
        return $this->culcere;
    }

    public function setCulcere(?string $culcere): self
    {
        $this->culcere = $culcere;

        return $this;
    }

    public function getCharlsonresult(): ?int
    {
        return $this->charlsonresult;
    }

    public function setCharlsonresult(?int $charlsonresult): self
    {
        $this->charlsonresult = $charlsonresult;

        return $this;
    }

    public function getEtatsantepre(): ?string
    {
        return $this->etatsantepre;
    }

    public function setEtatsantepre(?string $etatsantepre): self
    {
        $this->etatsantepre = $etatsantepre;

        return $this;
    }

    public function getEvorsr(): ?string
    {
        return $this->evorsr;
    }

    public function setEvorsr(?string $evorsr): self
    {
        $this->evorsr = $evorsr;

        return $this;
    }

    public function getConclusion(): ?string
    {
        return $this->conclusion;
    }

    public function setConclusion(?string $conclusion): self
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    public function getHistoire(): ?string
    {
        return $this->histoire;
    }

    public function setHistoire(?string $histoire): self
    {
        $this->histoire = $histoire;

        return $this;
    }

    public function getClinique(): ?string
    {
        return $this->clinique;
    }

    public function setClinique(?string $clinique): self
    {
        $this->clinique = $clinique;

        return $this;
    }

    public function getConcentree(): ?string
    {
        return $this->concentree;
    }

    public function setConcentree(?string $concentree): self
    {
        $this->concentree = $concentree;

        return $this;
    }


}
