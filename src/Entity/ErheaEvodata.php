<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErheaEvodata
 *
 * @ORM\Table(name="erhea_evodata")
 * @ORM\Entity(repositoryClass="App\Repository\ErheaEvodataRepository")
 */
class ErheaEvodata
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
     * @var int
     *
     * @ORM\Column(name="numjour", type="integer", nullable=false)
     */
    private $numjour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtdonnevo", type="date", nullable=false)
     */
    private $dtdonnevo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lit", type="string", length=20, nullable=true)
     */
    private $lit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ventmeca", type="integer", nullable=true)
     */
    private $ventmeca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ventnoninv", type="integer", nullable=true)
     */
    private $ventnoninv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="procvent", type="string", length=255, nullable=true)
     */
    private $procvent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="peep", type="integer", nullable=true)
     */
    private $peep;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pressionpic", type="integer", nullable=true)
     */
    private $pressionpic;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pressionplateau", type="integer", nullable=true)
     */
    private $pressionplateau;

    /**
     * @var int|null
     *
     * @ORM\Column(name="volumecourant", type="integer", nullable=true)
     */
    private $volumecourant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="frgazedusang", type="integer", nullable=true)
     */
    private $frgazedusang;

    /**
     * @var int|null
     *
     * @ORM\Column(name="intubation", type="integer", nullable=true)
     */
    private $intubation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tracheotomie", type="integer", nullable=true)
     */
    private $tracheotomie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="extubationacc", type="integer", nullable=true)
     */
    private $extubationacc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fio2lmno2", type="integer", nullable=true)
     */
    private $fio2lmno2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fio2", type="integer", nullable=true)
     */
    private $fio2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="o2", type="integer", nullable=true)
     */
    private $o2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="freqresp", type="integer", nullable=true)
     */
    private $freqresp;

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
     * @var int|null
     *
     * @ORM\Column(name="minpas", type="integer", nullable=true)
     */
    private $minpas;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxpas", type="integer", nullable=true)
     */
    private $maxpas;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minpad", type="integer", nullable=true)
     */
    private $minpad;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxpad", type="integer", nullable=true)
     */
    private $maxpad;

    /**
     * @var int|null
     *
     * @ORM\Column(name="peepmin", type="integer", nullable=true)
     */
    private $peepmin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="peepmax", type="integer", nullable=true)
     */
    private $peepmax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fio2min", type="integer", nullable=true)
     */
    private $fio2min;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fio2max", type="integer", nullable=true)
     */
    private $fio2max;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbsondeurin", type="integer", nullable=true)
     */
    private $nbsondeurin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diurese", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $diurese;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poidsevo", type="decimal", precision=4, scale=1, nullable=true)
     */
    private $poidsevo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hdhdf", type="string", length=255, nullable=true)
     */
    private $hdhdf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="glasgoweff", type="integer", nullable=true)
     */
    private $glasgoweff;

    /**
     * @var int|null
     *
     * @ORM\Column(name="glasgowest", type="integer", nullable=true)
     */
    private $glasgowest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sedationkt", type="string", length=255, nullable=true)
     */
    private $sedationkt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inotropes", type="string", length=255, nullable=true)
     */
    private $inotropes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adrenaline", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $adrenaline;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adrenalineunit", type="string", length=255, nullable=true)
     */
    private $adrenalineunit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="noradrenaline", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $noradrenaline;

    /**
     * @var string|null
     *
     * @ORM\Column(name="noradrenalineunit", type="string", length=255, nullable=true)
     */
    private $noradrenalineunit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dobutamine", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $dobutamine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dobutamineunit", type="string", length=255, nullable=true)
     */
    private $dobutamineunit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autreinotrope", type="string", length=255, nullable=true)
     */
    private $autreinotrope;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autreinotropevalue", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $autreinotropevalue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autreinotropeunit", type="string", length=255, nullable=true)
     */
    private $autreinotropeunit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="protectgast", type="string", length=255, nullable=true)
     */
    private $protectgast;

    /**
     * @var int|null
     *
     * @ORM\Column(name="corticoides", type="integer", nullable=true)
     */
    private $corticoides;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nutrition", type="string", length=255, nullable=true)
     */
    private $nutrition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ddsdns", type="integer", nullable=true)
     */
    private $ddsdns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="antibioiv", type="string", length=255, nullable=true)
     */
    private $antibioiv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medcoag", type="string", length=255, nullable=true)
     */
    private $medcoag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pvipfc", type="integer", nullable=true)
     */
    private $pvipfc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="culglob", type="integer", nullable=true)
     */
    private $culglob;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plaquettes", type="integer", nullable=true)
     */
    private $plaquettes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="albumine", type="integer", nullable=true)
     */
    private $albumine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modeadmininsuline", type="integer", nullable=true)
     */
    private $modeadmininsuline;

    /**
     * @var int|null
     *
     * @ORM\Column(name="insuline", type="integer", nullable=true)
     */
    private $insuline;

    /**
     * @var int|null
     *
     * @ORM\Column(name="saignee", type="integer", nullable=true)
     */
    private $saignee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autre", type="text", length=0, nullable=true)
     */
    private $autre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hleucocytes", type="integer", nullable=true)
     */
    private $hleucocytes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hhematocrites", type="integer", nullable=true)
     */
    private $hhematocrites;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hplaquettes", type="integer", nullable=true)
     */
    private $hplaquettes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="htp", type="integer", nullable=true)
     */
    private $htp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="buree", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $buree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bcreatinine", type="integer", nullable=true)
     */
    private $bcreatinine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bnatremie", type="integer", nullable=true)
     */
    private $bnatremie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bkaliemie", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $bkaliemie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bbicarbonate", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $bbicarbonate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bph", type="decimal", precision=2, scale=1, nullable=true)
     */
    private $bph;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bpo2", type="integer", nullable=true)
     */
    private $bpo2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bpco2", type="integer", nullable=true)
     */
    private $bpco2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bbilirubine", type="integer", nullable=true)
     */
    private $bbilirubine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blactactes", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $blactactes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bprocalcitonine", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $bprocalcitonine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="btroponine", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $btroponine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bglycemie", type="decimal", precision=4, scale=1, nullable=true)
     */
    private $bglycemie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gmr", type="string", length=255, nullable=true)
     */
    private $gmr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bactgerm", type="string", length=255, nullable=true)
     */
    private $bactgerm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bactresist", type="string", length=255, nullable=true)
     */
    private $bactresist;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bactinpoint", type="string", length=255, nullable=true)
     */
    private $bactinpoint;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="bactdtantibioeff", type="date", nullable=true)
     */
    private $bactdtantibioeff;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="bacthourantibioeff", type="time", nullable=true)
     */
    private $bacthourantibioeff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pneumonosogerm", type="string", length=255, nullable=true)
     */
    private $pneumonosogerm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pneumonosoresist", type="string", length=255, nullable=true)
     */
    private $pneumonosoresist;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pneumonosodtantibioeff", type="date", nullable=true)
     */
    private $pneumonosodtantibioeff;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pneumonosohourantibioeff", type="time", nullable=true)
     */
    private $pneumonosohourantibioeff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cathgerm", type="string", length=255, nullable=true)
     */
    private $cathgerm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cathgermresist", type="string", length=255, nullable=true)
     */
    private $cathgermresist;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cathdtantibioeff", type="date", nullable=true)
     */
    private $cathdtantibioeff;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cathhourantibioeff", type="time", nullable=true)
     */
    private $cathhourantibioeff;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cathtype", type="integer", nullable=true)
     */
    private $cathtype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cathsite", type="integer", nullable=true)
     */
    private $cathsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="infuringerm", type="string", length=255, nullable=true)
     */
    private $infuringerm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="infurinresist", type="string", length=255, nullable=true)
     */
    private $infurinresist;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infurindtantibioeff", type="date", nullable=true)
     */
    private $infurindtantibioeff;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infurinhourantibioeff", type="time", nullable=true)
     */
    private $infurinhourantibioeff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="infopgerm", type="string", length=255, nullable=true)
     */
    private $infopgerm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="infopresist", type="string", length=255, nullable=true)
     */
    private $infopresist;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infopdtantibioeff", type="date", nullable=true)
     */
    private $infopdtantibioeff;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infophourantibioeff", type="time", nullable=true)
     */
    private $infophourantibioeff;

    /**
     * @var int|null
     *
     * @ORM\Column(name="infopcdc", type="integer", nullable=true)
     */
    private $infopcdc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cholecystite", type="integer", nullable=true)
     */
    private $cholecystite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="colpseudomemb", type="integer", nullable=true)
     */
    private $colpseudomemb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="infectautre", type="string", length=255, nullable=true)
     */
    private $infectautre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pneumothorax", type="string", length=255, nullable=true)
     */
    private $pneumothorax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autreinfgrave", type="string", length=255, nullable=true)
     */
    private $autreinfgrave;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autreinfgravetxt", type="string", length=255, nullable=true)
     */
    private $autreinfgravetxt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hemodigest", type="integer", nullable=true)
     */
    private $hemodigest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accponction", type="string", length=255, nullable=true)
     */
    private $accponction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phlebite", type="string", length=255, nullable=true)
     */
    private $phlebite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="examens", type="string", length=255, nullable=true)
     */
    private $examens;

    /**
     * @var string|null
     *
     * @ORM\Column(name="examensrespiratoires", type="string", length=255, nullable=true)
     */
    private $examensrespiratoires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transports", type="string", length=255, nullable=true)
     */
    private $transports;

    /**
     * @var string|null
     *
     * @ORM\Column(name="soinshemodynamiques", type="string", length=255, nullable=true)
     */
    private $soinshemodynamiques;

    /**
     * @var string|null
     *
     * @ORM\Column(name="soinsneurologiques", type="string", length=255, nullable=true)
     */
    private $soinsneurologiques;

    /**
     * @var string|null
     *
     * @ORM\Column(name="soinsrespiratoires", type="string", length=255, nullable=true)
     */
    private $soinsrespiratoires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="soinsbase", type="string", length=255, nullable=true)
     */
    private $soinsbase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autressoins", type="string", length=255, nullable=true)
     */
    private $autressoins;

    /**
     * @var string|null
     *
     * @ORM\Column(name="drains", type="string", length=255, nullable=true)
     */
    private $drains;

    /**
     * @var int|null
     *
     * @ORM\Column(name="saps2", type="integer", nullable=true)
     */
    private $saps2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sofa", type="integer", nullable=true)
     */
    private $sofa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lod", type="integer", nullable=true)
     */
    private $lod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nems", type="integer", nullable=true)
     */
    private $nems;

    /**
     * @var float|null
     *
     * @ORM\Column(name="trio", type="float", precision=10, scale=0, nullable=true)
     */
    private $trio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="loihurlet", type="integer", nullable=true)
     */
    private $loihurlet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="limitationtherapeutique", type="integer", nullable=true)
     */
    private $limitationtherapeutique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccam", type="string", length=255, nullable=true)
     */
    private $ccam;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbvoiescath", type="integer", nullable=true)
     */
    private $nbvoiescath;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtpremierssignes", type="date", nullable=true)
     */
    private $dtpremierssignes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrpremierssignes", type="time", nullable=true)
     */
    private $hrpremierssignes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtlactates", type="date", nullable=true)
     */
    private $dtlactates;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrlactates", type="time", nullable=true)
     */
    private $hrlactates;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dhestimelactates", type="integer", nullable=true)
     */
    private $dhestimelactates;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtpas", type="date", nullable=true)
     */
    private $dtpas;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrpas", type="time", nullable=true)
     */
    private $hrpas;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dhestimepas", type="integer", nullable=true)
     */
    private $dhestimepas;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtpao2", type="date", nullable=true)
     */
    private $dtpao2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrpao2", type="time", nullable=true)
     */
    private $hrpao2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dhestimepao2", type="integer", nullable=true)
     */
    private $dhestimepao2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtcreatinine", type="date", nullable=true)
     */
    private $dtcreatinine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrcreatinine", type="time", nullable=true)
     */
    private $hrcreatinine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dhestimecreatinine", type="integer", nullable=true)
     */
    private $dhestimecreatinine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtinr", type="date", nullable=true)
     */
    private $dtinr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrinr", type="time", nullable=true)
     */
    private $hrinr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dhestimeinr", type="integer", nullable=true)
     */
    private $dhestimeinr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtbilirubine", type="date", nullable=true)
     */
    private $dtbilirubine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrbilirubine", type="time", nullable=true)
     */
    private $hrbilirubine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dhestimebilirubine", type="integer", nullable=true)
     */
    private $dhestimebilirubine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dttrombo", type="date", nullable=true)
     */
    private $dttrombo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrtrombo", type="time", nullable=true)
     */
    private $hrtrombo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dhestimetrombo", type="integer", nullable=true)
     */
    private $dhestimetrombo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtdebremplissage", type="date", nullable=true)
     */
    private $dtdebremplissage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrdebremplissage", type="time", nullable=true)
     */
    private $hrdebremplissage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cristalloide", type="integer", nullable=true)
     */
    private $cristalloide;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hypertonique", type="integer", nullable=true)
     */
    private $hypertonique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amidon", type="integer", nullable=true)
     */
    private $amidon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="albumine45", type="integer", nullable=true)
     */
    private $albumine45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="albumine20", type="integer", nullable=true)
     */
    private $albumine20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pvifc", type="integer", nullable=true)
     */
    private $pvifc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unitplaq", type="integer", nullable=true)
     */
    private $unitplaq;

    /**
     * @var int|null
     *
     * @ORM\Column(name="culotsglob", type="integer", nullable=true)
     */
    private $culotsglob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sinotropes", type="string", length=255, nullable=true)
     */
    private $sinotropes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtdebinotropes", type="date", nullable=true)
     */
    private $dtdebinotropes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrdebinotropes", type="time", nullable=true)
     */
    private $hrdebinotropes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dosemaxinotropes", type="integer", nullable=true)
     */
    private $dosemaxinotropes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="evacutionsiteconcerne", type="integer", nullable=true)
     */
    private $evacutionsiteconcerne;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtevacuation", type="date", nullable=true)
     */
    private $dtevacuation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hrevacuation", type="time", nullable=true)
     */
    private $hrevacuation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RASS", type="integer", nullable=true)
     */
    private $rass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ICDSC", type="integer", nullable=true)
     */
    private $icdsc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icdscAltConsc", type="integer", nullable=true)
     */
    private $icdscaltconsc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icdscInat", type="integer", nullable=true)
     */
    private $icdscinat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icdscDeso", type="integer", nullable=true)
     */
    private $icdscdeso;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icdscIllu", type="integer", nullable=true)
     */
    private $icdscillu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icdscPsy", type="integer", nullable=true)
     */
    private $icdscpsy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icdscHum", type="integer", nullable=true)
     */
    private $icdschum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icdscEve", type="integer", nullable=true)
     */
    private $icdsceve;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icdscSympt", type="integer", nullable=true)
     */
    private $icdscsympt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bpsVis", type="integer", nullable=true)
     */
    private $bpsvis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bpsMbSup", type="integer", nullable=true)
     */
    private $bpsmbsup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bpsResp", type="integer", nullable=true)
     */
    private $bpsresp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bps", type="integer", nullable=true)
     */
    private $bps;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdpatient(): int
    {
        return $this->idpatient;
    }

    /**
     * @param int $idpatient
     */
    public function setIdpatient(int $idpatient): void
    {
        $this->idpatient = $idpatient;
    }

    /**
     * @return int
     */
    public function getIdunitfct(): int
    {
        return $this->idunitfct;
    }

    /**
     * @param int $idunitfct
     */
    public function setIdunitfct(int $idunitfct): void
    {
        $this->idunitfct = $idunitfct;
    }

    /**
     * @return int
     */
    public function getIdvisit(): int
    {
        return $this->idvisit;
    }

    /**
     * @param int $idvisit
     */
    public function setIdvisit(int $idvisit): void
    {
        $this->idvisit = $idvisit;
    }

    /**
     * @return int
     */
    public function getNumjour(): int
    {
        return $this->numjour;
    }

    /**
     * @param int $numjour
     */
    public function setNumjour(int $numjour): void
    {
        $this->numjour = $numjour;
    }

    /**
     * @return \DateTime
     */
    public function getDtdonnevo(): \DateTime
    {
        return $this->dtdonnevo;
    }

    /**
     * @param \DateTime $dtdonnevo
     */
    public function setDtdonnevo(\DateTime $dtdonnevo): void
    {
        $this->dtdonnevo = $dtdonnevo;
    }

    /**
     * @return string|null
     */
    public function getLit(): ?string
    {
        return $this->lit;
    }

    /**
     * @param string|null $lit
     */
    public function setLit(?string $lit): void
    {
        $this->lit = $lit;
    }

    /**
     * @return int|null
     */
    public function getVentmeca(): ?int
    {
        return $this->ventmeca;
    }

    /**
     * @param int|null $ventmeca
     */
    public function setVentmeca(?int $ventmeca): void
    {
        $this->ventmeca = $ventmeca;
    }

    /**
     * @return int|null
     */
    public function getVentnoninv(): ?int
    {
        return $this->ventnoninv;
    }

    /**
     * @param int|null $ventnoninv
     */
    public function setVentnoninv(?int $ventnoninv): void
    {
        $this->ventnoninv = $ventnoninv;
    }

    /**
     * @return string|null
     */
    public function getProcvent(): ?string
    {
        return $this->procvent;
    }

    /**
     * @param string|null $procvent
     */
    public function setProcvent(?string $procvent): void
    {
        $this->procvent = $procvent;
    }

    /**
     * @return int|null
     */
    public function getPeep(): ?int
    {
        return $this->peep;
    }

    /**
     * @param int|null $peep
     */
    public function setPeep(?int $peep): void
    {
        $this->peep = $peep;
    }

    /**
     * @return int|null
     */
    public function getPressionpic(): ?int
    {
        return $this->pressionpic;
    }

    /**
     * @param int|null $pressionpic
     */
    public function setPressionpic(?int $pressionpic): void
    {
        $this->pressionpic = $pressionpic;
    }

    /**
     * @return int|null
     */
    public function getPressionplateau(): ?int
    {
        return $this->pressionplateau;
    }

    /**
     * @param int|null $pressionplateau
     */
    public function setPressionplateau(?int $pressionplateau): void
    {
        $this->pressionplateau = $pressionplateau;
    }

    /**
     * @return int|null
     */
    public function getVolumecourant(): ?int
    {
        return $this->volumecourant;
    }

    /**
     * @param int|null $volumecourant
     */
    public function setVolumecourant(?int $volumecourant): void
    {
        $this->volumecourant = $volumecourant;
    }

    /**
     * @return int|null
     */
    public function getFrgazedusang(): ?int
    {
        return $this->frgazedusang;
    }

    /**
     * @param int|null $frgazedusang
     */
    public function setFrgazedusang(?int $frgazedusang): void
    {
        $this->frgazedusang = $frgazedusang;
    }

    /**
     * @return int|null
     */
    public function getIntubation(): ?int
    {
        return $this->intubation;
    }

    /**
     * @param int|null $intubation
     */
    public function setIntubation(?int $intubation): void
    {
        $this->intubation = $intubation;
    }

    /**
     * @return int|null
     */
    public function getTracheotomie(): ?int
    {
        return $this->tracheotomie;
    }

    /**
     * @param int|null $tracheotomie
     */
    public function setTracheotomie(?int $tracheotomie): void
    {
        $this->tracheotomie = $tracheotomie;
    }

    /**
     * @return int|null
     */
    public function getExtubationacc(): ?int
    {
        return $this->extubationacc;
    }

    /**
     * @param int|null $extubationacc
     */
    public function setExtubationacc(?int $extubationacc): void
    {
        $this->extubationacc = $extubationacc;
    }

    /**
     * @return int|null
     */
    public function getFio2lmno2(): ?int
    {
        return $this->fio2lmno2;
    }

    /**
     * @param int|null $fio2lmno2
     */
    public function setFio2lmno2(?int $fio2lmno2): void
    {
        $this->fio2lmno2 = $fio2lmno2;
    }

    /**
     * @return int|null
     */
    public function getFio2(): ?int
    {
        return $this->fio2;
    }

    /**
     * @param int|null $fio2
     */
    public function setFio2(?int $fio2): void
    {
        $this->fio2 = $fio2;
    }

    /**
     * @return int|null
     */
    public function getO2(): ?int
    {
        return $this->o2;
    }

    /**
     * @param int|null $o2
     */
    public function setO2(?int $o2): void
    {
        $this->o2 = $o2;
    }

    /**
     * @return int|null
     */
    public function getFreqresp(): ?int
    {
        return $this->freqresp;
    }

    /**
     * @param int|null $freqresp
     */
    public function setFreqresp(?int $freqresp): void
    {
        $this->freqresp = $freqresp;
    }

    /**
     * @return int|null
     */
    public function getMinfc(): ?int
    {
        return $this->minfc;
    }

    /**
     * @param int|null $minfc
     */
    public function setMinfc(?int $minfc): void
    {
        $this->minfc = $minfc;
    }

    /**
     * @return int|null
     */
    public function getMaxfc(): ?int
    {
        return $this->maxfc;
    }

    /**
     * @param int|null $maxfc
     */
    public function setMaxfc(?int $maxfc): void
    {
        $this->maxfc = $maxfc;
    }

    /**
     * @return string|null
     */
    public function getMintemp(): ?string
    {
        return $this->mintemp;
    }

    /**
     * @param string|null $mintemp
     */
    public function setMintemp(?string $mintemp): void
    {
        $this->mintemp = $mintemp;
    }

    /**
     * @return string|null
     */
    public function getMaxtemp(): ?string
    {
        return $this->maxtemp;
    }

    /**
     * @param string|null $maxtemp
     */
    public function setMaxtemp(?string $maxtemp): void
    {
        $this->maxtemp = $maxtemp;
    }

    /**
     * @return int|null
     */
    public function getMinpas(): ?int
    {
        return $this->minpas;
    }

    /**
     * @param int|null $minpas
     */
    public function setMinpas(?int $minpas): void
    {
        $this->minpas = $minpas;
    }

    /**
     * @return int|null
     */
    public function getMaxpas(): ?int
    {
        return $this->maxpas;
    }

    /**
     * @param int|null $maxpas
     */
    public function setMaxpas(?int $maxpas): void
    {
        $this->maxpas = $maxpas;
    }

    /**
     * @return int|null
     */
    public function getMinpad(): ?int
    {
        return $this->minpad;
    }

    /**
     * @param int|null $minpad
     */
    public function setMinpad(?int $minpad): void
    {
        $this->minpad = $minpad;
    }

    /**
     * @return int|null
     */
    public function getMaxpad(): ?int
    {
        return $this->maxpad;
    }

    /**
     * @param int|null $maxpad
     */
    public function setMaxpad(?int $maxpad): void
    {
        $this->maxpad = $maxpad;
    }

    /**
     * @return int|null
     */
    public function getPeepmin(): ?int
    {
        return $this->peepmin;
    }

    /**
     * @param int|null $peepmin
     */
    public function setPeepmin(?int $peepmin): void
    {
        $this->peepmin = $peepmin;
    }

    /**
     * @return int|null
     */
    public function getPeepmax(): ?int
    {
        return $this->peepmax;
    }

    /**
     * @param int|null $peepmax
     */
    public function setPeepmax(?int $peepmax): void
    {
        $this->peepmax = $peepmax;
    }

    /**
     * @return int|null
     */
    public function getFio2min(): ?int
    {
        return $this->fio2min;
    }

    /**
     * @param int|null $fio2min
     */
    public function setFio2min(?int $fio2min): void
    {
        $this->fio2min = $fio2min;
    }

    /**
     * @return int|null
     */
    public function getFio2max(): ?int
    {
        return $this->fio2max;
    }

    /**
     * @param int|null $fio2max
     */
    public function setFio2max(?int $fio2max): void
    {
        $this->fio2max = $fio2max;
    }

    /**
     * @return int|null
     */
    public function getNbsondeurin(): ?int
    {
        return $this->nbsondeurin;
    }

    /**
     * @param int|null $nbsondeurin
     */
    public function setNbsondeurin(?int $nbsondeurin): void
    {
        $this->nbsondeurin = $nbsondeurin;
    }

    /**
     * @return string|null
     */
    public function getDiurese(): ?string
    {
        return $this->diurese;
    }

    /**
     * @param string|null $diurese
     */
    public function setDiurese(?string $diurese): void
    {
        $this->diurese = $diurese;
    }

    /**
     * @return string|null
     */
    public function getPoidsevo(): ?string
    {
        return $this->poidsevo;
    }

    /**
     * @param string|null $poidsevo
     */
    public function setPoidsevo(?string $poidsevo): void
    {
        $this->poidsevo = $poidsevo;
    }

    /**
     * @return string|null
     */
    public function getHdhdf(): ?string
    {
        return $this->hdhdf;
    }

    /**
     * @param string|null $hdhdf
     */
    public function setHdhdf(?string $hdhdf): void
    {
        $this->hdhdf = $hdhdf;
    }

    /**
     * @return int|null
     */
    public function getGlasgoweff(): ?int
    {
        return $this->glasgoweff;
    }

    /**
     * @param int|null $glasgoweff
     */
    public function setGlasgoweff(?int $glasgoweff): void
    {
        $this->glasgoweff = $glasgoweff;
    }

    /**
     * @return int|null
     */
    public function getGlasgowest(): ?int
    {
        return $this->glasgowest;
    }

    /**
     * @param int|null $glasgowest
     */
    public function setGlasgowest(?int $glasgowest): void
    {
        $this->glasgowest = $glasgowest;
    }

    /**
     * @return string|null
     */
    public function getSedationkt(): ?string
    {
        return $this->sedationkt;
    }

    /**
     * @param string|null $sedationkt
     */
    public function setSedationkt(?string $sedationkt): void
    {
        $this->sedationkt = $sedationkt;
    }

    /**
     * @return string|null
     */
    public function getInotropes(): ?string
    {
        return $this->inotropes;
    }

    /**
     * @param string|null $inotropes
     */
    public function setInotropes(?string $inotropes): void
    {
        $this->inotropes = $inotropes;
    }

    /**
     * @return string|null
     */
    public function getAdrenaline(): ?string
    {
        return $this->adrenaline;
    }

    /**
     * @param string|null $adrenaline
     */
    public function setAdrenaline(?string $adrenaline): void
    {
        $this->adrenaline = $adrenaline;
    }

    /**
     * @return string|null
     */
    public function getAdrenalineunit(): ?string
    {
        return $this->adrenalineunit;
    }

    /**
     * @param string|null $adrenalineunit
     */
    public function setAdrenalineunit(?string $adrenalineunit): void
    {
        $this->adrenalineunit = $adrenalineunit;
    }

    /**
     * @return string|null
     */
    public function getNoradrenaline(): ?string
    {
        return $this->noradrenaline;
    }

    /**
     * @param string|null $noradrenaline
     */
    public function setNoradrenaline(?string $noradrenaline): void
    {
        $this->noradrenaline = $noradrenaline;
    }

    /**
     * @return string|null
     */
    public function getNoradrenalineunit(): ?string
    {
        return $this->noradrenalineunit;
    }

    /**
     * @param string|null $noradrenalineunit
     */
    public function setNoradrenalineunit(?string $noradrenalineunit): void
    {
        $this->noradrenalineunit = $noradrenalineunit;
    }

    /**
     * @return string|null
     */
    public function getDobutamine(): ?string
    {
        return $this->dobutamine;
    }

    /**
     * @param string|null $dobutamine
     */
    public function setDobutamine(?string $dobutamine): void
    {
        $this->dobutamine = $dobutamine;
    }

    /**
     * @return string|null
     */
    public function getDobutamineunit(): ?string
    {
        return $this->dobutamineunit;
    }

    /**
     * @param string|null $dobutamineunit
     */
    public function setDobutamineunit(?string $dobutamineunit): void
    {
        $this->dobutamineunit = $dobutamineunit;
    }

    /**
     * @return string|null
     */
    public function getAutreinotrope(): ?string
    {
        return $this->autreinotrope;
    }

    /**
     * @param string|null $autreinotrope
     */
    public function setAutreinotrope(?string $autreinotrope): void
    {
        $this->autreinotrope = $autreinotrope;
    }

    /**
     * @return string|null
     */
    public function getAutreinotropevalue(): ?string
    {
        return $this->autreinotropevalue;
    }

    /**
     * @param string|null $autreinotropevalue
     */
    public function setAutreinotropevalue(?string $autreinotropevalue): void
    {
        $this->autreinotropevalue = $autreinotropevalue;
    }

    /**
     * @return string|null
     */
    public function getAutreinotropeunit(): ?string
    {
        return $this->autreinotropeunit;
    }

    /**
     * @param string|null $autreinotropeunit
     */
    public function setAutreinotropeunit(?string $autreinotropeunit): void
    {
        $this->autreinotropeunit = $autreinotropeunit;
    }

    /**
     * @return string|null
     */
    public function getProtectgast(): ?string
    {
        return $this->protectgast;
    }

    /**
     * @param string|null $protectgast
     */
    public function setProtectgast(?string $protectgast): void
    {
        $this->protectgast = $protectgast;
    }

    /**
     * @return int|null
     */
    public function getCorticoides(): ?int
    {
        return $this->corticoides;
    }

    /**
     * @param int|null $corticoides
     */
    public function setCorticoides(?int $corticoides): void
    {
        $this->corticoides = $corticoides;
    }

    /**
     * @return string|null
     */
    public function getNutrition(): ?string
    {
        return $this->nutrition;
    }

    /**
     * @param string|null $nutrition
     */
    public function setNutrition(?string $nutrition): void
    {
        $this->nutrition = $nutrition;
    }

    /**
     * @return int|null
     */
    public function getDdsdns(): ?int
    {
        return $this->ddsdns;
    }

    /**
     * @param int|null $ddsdns
     */
    public function setDdsdns(?int $ddsdns): void
    {
        $this->ddsdns = $ddsdns;
    }

    /**
     * @return string|null
     */
    public function getAntibioiv(): ?string
    {
        return $this->antibioiv;
    }

    /**
     * @param string|null $antibioiv
     */
    public function setAntibioiv(?string $antibioiv): void
    {
        $this->antibioiv = $antibioiv;
    }

    /**
     * @return string|null
     */
    public function getMedcoag(): ?string
    {
        return $this->medcoag;
    }

    /**
     * @param string|null $medcoag
     */
    public function setMedcoag(?string $medcoag): void
    {
        $this->medcoag = $medcoag;
    }

    /**
     * @return int|null
     */
    public function getPvipfc(): ?int
    {
        return $this->pvipfc;
    }

    /**
     * @param int|null $pvipfc
     */
    public function setPvipfc(?int $pvipfc): void
    {
        $this->pvipfc = $pvipfc;
    }

    /**
     * @return int|null
     */
    public function getCulglob(): ?int
    {
        return $this->culglob;
    }

    /**
     * @param int|null $culglob
     */
    public function setCulglob(?int $culglob): void
    {
        $this->culglob = $culglob;
    }

    /**
     * @return int|null
     */
    public function getPlaquettes(): ?int
    {
        return $this->plaquettes;
    }

    /**
     * @param int|null $plaquettes
     */
    public function setPlaquettes(?int $plaquettes): void
    {
        $this->plaquettes = $plaquettes;
    }

    /**
     * @return int|null
     */
    public function getAlbumine(): ?int
    {
        return $this->albumine;
    }

    /**
     * @param int|null $albumine
     */
    public function setAlbumine(?int $albumine): void
    {
        $this->albumine = $albumine;
    }

    /**
     * @return int|null
     */
    public function getModeadmininsuline(): ?int
    {
        return $this->modeadmininsuline;
    }

    /**
     * @param int|null $modeadmininsuline
     */
    public function setModeadmininsuline(?int $modeadmininsuline): void
    {
        $this->modeadmininsuline = $modeadmininsuline;
    }

    /**
     * @return int|null
     */
    public function getInsuline(): ?int
    {
        return $this->insuline;
    }

    /**
     * @param int|null $insuline
     */
    public function setInsuline(?int $insuline): void
    {
        $this->insuline = $insuline;
    }

    /**
     * @return int|null
     */
    public function getSaignee(): ?int
    {
        return $this->saignee;
    }

    /**
     * @param int|null $saignee
     */
    public function setSaignee(?int $saignee): void
    {
        $this->saignee = $saignee;
    }

    /**
     * @return string|null
     */
    public function getAutre(): ?string
    {
        return $this->autre;
    }

    /**
     * @param string|null $autre
     */
    public function setAutre(?string $autre): void
    {
        $this->autre = $autre;
    }

    /**
     * @return int|null
     */
    public function getHleucocytes(): ?int
    {
        return $this->hleucocytes;
    }

    /**
     * @param int|null $hleucocytes
     */
    public function setHleucocytes(?int $hleucocytes): void
    {
        $this->hleucocytes = $hleucocytes;
    }

    /**
     * @return int|null
     */
    public function getHhematocrites(): ?int
    {
        return $this->hhematocrites;
    }

    /**
     * @param int|null $hhematocrites
     */
    public function setHhematocrites(?int $hhematocrites): void
    {
        $this->hhematocrites = $hhematocrites;
    }

    /**
     * @return int|null
     */
    public function getHplaquettes(): ?int
    {
        return $this->hplaquettes;
    }

    /**
     * @param int|null $hplaquettes
     */
    public function setHplaquettes(?int $hplaquettes): void
    {
        $this->hplaquettes = $hplaquettes;
    }

    /**
     * @return int|null
     */
    public function getHtp(): ?int
    {
        return $this->htp;
    }

    /**
     * @param int|null $htp
     */
    public function setHtp(?int $htp): void
    {
        $this->htp = $htp;
    }

    /**
     * @return string|null
     */
    public function getBuree(): ?string
    {
        return $this->buree;
    }

    /**
     * @param string|null $buree
     */
    public function setBuree(?string $buree): void
    {
        $this->buree = $buree;
    }

    /**
     * @return int|null
     */
    public function getBcreatinine(): ?int
    {
        return $this->bcreatinine;
    }

    /**
     * @param int|null $bcreatinine
     */
    public function setBcreatinine(?int $bcreatinine): void
    {
        $this->bcreatinine = $bcreatinine;
    }

    /**
     * @return int|null
     */
    public function getBnatremie(): ?int
    {
        return $this->bnatremie;
    }

    /**
     * @param int|null $bnatremie
     */
    public function setBnatremie(?int $bnatremie): void
    {
        $this->bnatremie = $bnatremie;
    }

    /**
     * @return string|null
     */
    public function getBkaliemie(): ?string
    {
        return $this->bkaliemie;
    }

    /**
     * @param string|null $bkaliemie
     */
    public function setBkaliemie(?string $bkaliemie): void
    {
        $this->bkaliemie = $bkaliemie;
    }

    /**
     * @return string|null
     */
    public function getBbicarbonate(): ?string
    {
        return $this->bbicarbonate;
    }

    /**
     * @param string|null $bbicarbonate
     */
    public function setBbicarbonate(?string $bbicarbonate): void
    {
        $this->bbicarbonate = $bbicarbonate;
    }

    /**
     * @return string|null
     */
    public function getBph(): ?string
    {
        return $this->bph;
    }

    /**
     * @param string|null $bph
     */
    public function setBph(?string $bph): void
    {
        $this->bph = $bph;
    }

    /**
     * @return int|null
     */
    public function getBpo2(): ?int
    {
        return $this->bpo2;
    }

    /**
     * @param int|null $bpo2
     */
    public function setBpo2(?int $bpo2): void
    {
        $this->bpo2 = $bpo2;
    }

    /**
     * @return int|null
     */
    public function getBpco2(): ?int
    {
        return $this->bpco2;
    }

    /**
     * @param int|null $bpco2
     */
    public function setBpco2(?int $bpco2): void
    {
        $this->bpco2 = $bpco2;
    }

    /**
     * @return int|null
     */
    public function getBbilirubine(): ?int
    {
        return $this->bbilirubine;
    }

    /**
     * @param int|null $bbilirubine
     */
    public function setBbilirubine(?int $bbilirubine): void
    {
        $this->bbilirubine = $bbilirubine;
    }

    /**
     * @return string|null
     */
    public function getBlactactes(): ?string
    {
        return $this->blactactes;
    }

    /**
     * @param string|null $blactactes
     */
    public function setBlactactes(?string $blactactes): void
    {
        $this->blactactes = $blactactes;
    }

    /**
     * @return string|null
     */
    public function getBprocalcitonine(): ?string
    {
        return $this->bprocalcitonine;
    }

    /**
     * @param string|null $bprocalcitonine
     */
    public function setBprocalcitonine(?string $bprocalcitonine): void
    {
        $this->bprocalcitonine = $bprocalcitonine;
    }

    /**
     * @return string|null
     */
    public function getBtroponine(): ?string
    {
        return $this->btroponine;
    }

    /**
     * @param string|null $btroponine
     */
    public function setBtroponine(?string $btroponine): void
    {
        $this->btroponine = $btroponine;
    }

    /**
     * @return string|null
     */
    public function getBglycemie(): ?string
    {
        return $this->bglycemie;
    }

    /**
     * @param string|null $bglycemie
     */
    public function setBglycemie(?string $bglycemie): void
    {
        $this->bglycemie = $bglycemie;
    }

    /**
     * @return string|null
     */
    public function getGmr(): ?string
    {
        return $this->gmr;
    }

    /**
     * @param string|null $gmr
     */
    public function setGmr(?string $gmr): void
    {
        $this->gmr = $gmr;
    }

    /**
     * @return string|null
     */
    public function getBactgerm(): ?string
    {
        return $this->bactgerm;
    }

    /**
     * @param string|null $bactgerm
     */
    public function setBactgerm(?string $bactgerm): void
    {
        $this->bactgerm = $bactgerm;
    }

    /**
     * @return string|null
     */
    public function getBactresist(): ?string
    {
        return $this->bactresist;
    }

    /**
     * @param string|null $bactresist
     */
    public function setBactresist(?string $bactresist): void
    {
        $this->bactresist = $bactresist;
    }

    /**
     * @return string|null
     */
    public function getBactinpoint(): ?string
    {
        return $this->bactinpoint;
    }

    /**
     * @param string|null $bactinpoint
     */
    public function setBactinpoint(?string $bactinpoint): void
    {
        $this->bactinpoint = $bactinpoint;
    }

    /**
     * @return \DateTime|null
     */
    public function getBactdtantibioeff(): ?\DateTime
    {
        return $this->bactdtantibioeff;
    }

    /**
     * @param \DateTime|null $bactdtantibioeff
     */
    public function setBactdtantibioeff(?\DateTime $bactdtantibioeff): void
    {
        $this->bactdtantibioeff = $bactdtantibioeff;
    }

    /**
     * @return \DateTime|null
     */
    public function getBacthourantibioeff(): ?\DateTime
    {
        return $this->bacthourantibioeff;
    }

    /**
     * @param \DateTime|null $bacthourantibioeff
     */
    public function setBacthourantibioeff(?\DateTime $bacthourantibioeff): void
    {
        $this->bacthourantibioeff = $bacthourantibioeff;
    }

    /**
     * @return string|null
     */
    public function getPneumonosogerm(): ?string
    {
        return $this->pneumonosogerm;
    }

    /**
     * @param string|null $pneumonosogerm
     */
    public function setPneumonosogerm(?string $pneumonosogerm): void
    {
        $this->pneumonosogerm = $pneumonosogerm;
    }

    /**
     * @return string|null
     */
    public function getPneumonosoresist(): ?string
    {
        return $this->pneumonosoresist;
    }

    /**
     * @param string|null $pneumonosoresist
     */
    public function setPneumonosoresist(?string $pneumonosoresist): void
    {
        $this->pneumonosoresist = $pneumonosoresist;
    }

    /**
     * @return \DateTime|null
     */
    public function getPneumonosodtantibioeff(): ?\DateTime
    {
        return $this->pneumonosodtantibioeff;
    }

    /**
     * @param \DateTime|null $pneumonosodtantibioeff
     */
    public function setPneumonosodtantibioeff(?\DateTime $pneumonosodtantibioeff): void
    {
        $this->pneumonosodtantibioeff = $pneumonosodtantibioeff;
    }

    /**
     * @return \DateTime|null
     */
    public function getPneumonosohourantibioeff(): ?\DateTime
    {
        return $this->pneumonosohourantibioeff;
    }

    /**
     * @param \DateTime|null $pneumonosohourantibioeff
     */
    public function setPneumonosohourantibioeff(?\DateTime $pneumonosohourantibioeff): void
    {
        $this->pneumonosohourantibioeff = $pneumonosohourantibioeff;
    }

    /**
     * @return string|null
     */
    public function getCathgerm(): ?string
    {
        return $this->cathgerm;
    }

    /**
     * @param string|null $cathgerm
     */
    public function setCathgerm(?string $cathgerm): void
    {
        $this->cathgerm = $cathgerm;
    }

    /**
     * @return string|null
     */
    public function getCathgermresist(): ?string
    {
        return $this->cathgermresist;
    }

    /**
     * @param string|null $cathgermresist
     */
    public function setCathgermresist(?string $cathgermresist): void
    {
        $this->cathgermresist = $cathgermresist;
    }

    /**
     * @return \DateTime|null
     */
    public function getCathdtantibioeff(): ?\DateTime
    {
        return $this->cathdtantibioeff;
    }

    /**
     * @param \DateTime|null $cathdtantibioeff
     */
    public function setCathdtantibioeff(?\DateTime $cathdtantibioeff): void
    {
        $this->cathdtantibioeff = $cathdtantibioeff;
    }

    /**
     * @return \DateTime|null
     */
    public function getCathhourantibioeff(): ?\DateTime
    {
        return $this->cathhourantibioeff;
    }

    /**
     * @param \DateTime|null $cathhourantibioeff
     */
    public function setCathhourantibioeff(?\DateTime $cathhourantibioeff): void
    {
        $this->cathhourantibioeff = $cathhourantibioeff;
    }

    /**
     * @return int|null
     */
    public function getCathtype(): ?int
    {
        return $this->cathtype;
    }

    /**
     * @param int|null $cathtype
     */
    public function setCathtype(?int $cathtype): void
    {
        $this->cathtype = $cathtype;
    }

    /**
     * @return int|null
     */
    public function getCathsite(): ?int
    {
        return $this->cathsite;
    }

    /**
     * @param int|null $cathsite
     */
    public function setCathsite(?int $cathsite): void
    {
        $this->cathsite = $cathsite;
    }

    /**
     * @return string|null
     */
    public function getInfuringerm(): ?string
    {
        return $this->infuringerm;
    }

    /**
     * @param string|null $infuringerm
     */
    public function setInfuringerm(?string $infuringerm): void
    {
        $this->infuringerm = $infuringerm;
    }

    /**
     * @return string|null
     */
    public function getInfurinresist(): ?string
    {
        return $this->infurinresist;
    }

    /**
     * @param string|null $infurinresist
     */
    public function setInfurinresist(?string $infurinresist): void
    {
        $this->infurinresist = $infurinresist;
    }

    /**
     * @return \DateTime|null
     */
    public function getInfurindtantibioeff(): ?\DateTime
    {
        return $this->infurindtantibioeff;
    }

    /**
     * @param \DateTime|null $infurindtantibioeff
     */
    public function setInfurindtantibioeff(?\DateTime $infurindtantibioeff): void
    {
        $this->infurindtantibioeff = $infurindtantibioeff;
    }

    /**
     * @return \DateTime|null
     */
    public function getInfurinhourantibioeff(): ?\DateTime
    {
        return $this->infurinhourantibioeff;
    }

    /**
     * @param \DateTime|null $infurinhourantibioeff
     */
    public function setInfurinhourantibioeff(?\DateTime $infurinhourantibioeff): void
    {
        $this->infurinhourantibioeff = $infurinhourantibioeff;
    }

    /**
     * @return string|null
     */
    public function getInfopgerm(): ?string
    {
        return $this->infopgerm;
    }

    /**
     * @param string|null $infopgerm
     */
    public function setInfopgerm(?string $infopgerm): void
    {
        $this->infopgerm = $infopgerm;
    }

    /**
     * @return string|null
     */
    public function getInfopresist(): ?string
    {
        return $this->infopresist;
    }

    /**
     * @param string|null $infopresist
     */
    public function setInfopresist(?string $infopresist): void
    {
        $this->infopresist = $infopresist;
    }

    /**
     * @return \DateTime|null
     */
    public function getInfopdtantibioeff(): ?\DateTime
    {
        return $this->infopdtantibioeff;
    }

    /**
     * @param \DateTime|null $infopdtantibioeff
     */
    public function setInfopdtantibioeff(?\DateTime $infopdtantibioeff): void
    {
        $this->infopdtantibioeff = $infopdtantibioeff;
    }

    /**
     * @return \DateTime|null
     */
    public function getInfophourantibioeff(): ?\DateTime
    {
        return $this->infophourantibioeff;
    }

    /**
     * @param \DateTime|null $infophourantibioeff
     */
    public function setInfophourantibioeff(?\DateTime $infophourantibioeff): void
    {
        $this->infophourantibioeff = $infophourantibioeff;
    }

    /**
     * @return int|null
     */
    public function getInfopcdc(): ?int
    {
        return $this->infopcdc;
    }

    /**
     * @param int|null $infopcdc
     */
    public function setInfopcdc(?int $infopcdc): void
    {
        $this->infopcdc = $infopcdc;
    }

    /**
     * @return int|null
     */
    public function getCholecystite(): ?int
    {
        return $this->cholecystite;
    }

    /**
     * @param int|null $cholecystite
     */
    public function setCholecystite(?int $cholecystite): void
    {
        $this->cholecystite = $cholecystite;
    }

    /**
     * @return int|null
     */
    public function getColpseudomemb(): ?int
    {
        return $this->colpseudomemb;
    }

    /**
     * @param int|null $colpseudomemb
     */
    public function setColpseudomemb(?int $colpseudomemb): void
    {
        $this->colpseudomemb = $colpseudomemb;
    }

    /**
     * @return string|null
     */
    public function getInfectautre(): ?string
    {
        return $this->infectautre;
    }

    /**
     * @param string|null $infectautre
     */
    public function setInfectautre(?string $infectautre): void
    {
        $this->infectautre = $infectautre;
    }

    /**
     * @return string|null
     */
    public function getPneumothorax(): ?string
    {
        return $this->pneumothorax;
    }

    /**
     * @param string|null $pneumothorax
     */
    public function setPneumothorax(?string $pneumothorax): void
    {
        $this->pneumothorax = $pneumothorax;
    }

    /**
     * @return string|null
     */
    public function getAutreinfgrave(): ?string
    {
        return $this->autreinfgrave;
    }

    /**
     * @param string|null $autreinfgrave
     */
    public function setAutreinfgrave(?string $autreinfgrave): void
    {
        $this->autreinfgrave = $autreinfgrave;
    }

    /**
     * @return string|null
     */
    public function getAutreinfgravetxt(): ?string
    {
        return $this->autreinfgravetxt;
    }

    /**
     * @param string|null $autreinfgravetxt
     */
    public function setAutreinfgravetxt(?string $autreinfgravetxt): void
    {
        $this->autreinfgravetxt = $autreinfgravetxt;
    }

    /**
     * @return int|null
     */
    public function getHemodigest(): ?int
    {
        return $this->hemodigest;
    }

    /**
     * @param int|null $hemodigest
     */
    public function setHemodigest(?int $hemodigest): void
    {
        $this->hemodigest = $hemodigest;
    }

    /**
     * @return string|null
     */
    public function getAccponction(): ?string
    {
        return $this->accponction;
    }

    /**
     * @param string|null $accponction
     */
    public function setAccponction(?string $accponction): void
    {
        $this->accponction = $accponction;
    }

    /**
     * @return string|null
     */
    public function getPhlebite(): ?string
    {
        return $this->phlebite;
    }

    /**
     * @param string|null $phlebite
     */
    public function setPhlebite(?string $phlebite): void
    {
        $this->phlebite = $phlebite;
    }

    /**
     * @return string|null
     */
    public function getExamens(): ?string
    {
        return $this->examens;
    }

    /**
     * @param string|null $examens
     */
    public function setExamens(?string $examens): void
    {
        $this->examens = $examens;
    }

    /**
     * @return string|null
     */
    public function getExamensrespiratoires(): ?string
    {
        return $this->examensrespiratoires;
    }

    /**
     * @param string|null $examensrespiratoires
     */
    public function setExamensrespiratoires(?string $examensrespiratoires): void
    {
        $this->examensrespiratoires = $examensrespiratoires;
    }

    /**
     * @return string|null
     */
    public function getTransports(): ?string
    {
        return $this->transports;
    }

    /**
     * @param string|null $transports
     */
    public function setTransports(?string $transports): void
    {
        $this->transports = $transports;
    }

    /**
     * @return string|null
     */
    public function getSoinshemodynamiques(): ?string
    {
        return $this->soinshemodynamiques;
    }

    /**
     * @param string|null $soinshemodynamiques
     */
    public function setSoinshemodynamiques(?string $soinshemodynamiques): void
    {
        $this->soinshemodynamiques = $soinshemodynamiques;
    }

    /**
     * @return string|null
     */
    public function getSoinsneurologiques(): ?string
    {
        return $this->soinsneurologiques;
    }

    /**
     * @param string|null $soinsneurologiques
     */
    public function setSoinsneurologiques(?string $soinsneurologiques): void
    {
        $this->soinsneurologiques = $soinsneurologiques;
    }

    /**
     * @return string|null
     */
    public function getSoinsrespiratoires(): ?string
    {
        return $this->soinsrespiratoires;
    }

    /**
     * @param string|null $soinsrespiratoires
     */
    public function setSoinsrespiratoires(?string $soinsrespiratoires): void
    {
        $this->soinsrespiratoires = $soinsrespiratoires;
    }

    /**
     * @return string|null
     */
    public function getSoinsbase(): ?string
    {
        return $this->soinsbase;
    }

    /**
     * @param string|null $soinsbase
     */
    public function setSoinsbase(?string $soinsbase): void
    {
        $this->soinsbase = $soinsbase;
    }

    /**
     * @return string|null
     */
    public function getAutressoins(): ?string
    {
        return $this->autressoins;
    }

    /**
     * @param string|null $autressoins
     */
    public function setAutressoins(?string $autressoins): void
    {
        $this->autressoins = $autressoins;
    }

    /**
     * @return string|null
     */
    public function getDrains(): ?string
    {
        return $this->drains;
    }

    /**
     * @param string|null $drains
     */
    public function setDrains(?string $drains): void
    {
        $this->drains = $drains;
    }

    /**
     * @return int|null
     */
    public function getSaps2(): ?int
    {
        return $this->saps2;
    }

    /**
     * @param int|null $saps2
     */
    public function setSaps2(?int $saps2): void
    {
        $this->saps2 = $saps2;
    }

    /**
     * @return int|null
     */
    public function getSofa(): ?int
    {
        return $this->sofa;
    }

    /**
     * @param int|null $sofa
     */
    public function setSofa(?int $sofa): void
    {
        $this->sofa = $sofa;
    }

    /**
     * @return int|null
     */
    public function getLod(): ?int
    {
        return $this->lod;
    }

    /**
     * @param int|null $lod
     */
    public function setLod(?int $lod): void
    {
        $this->lod = $lod;
    }

    /**
     * @return int|null
     */
    public function getNems(): ?int
    {
        return $this->nems;
    }

    /**
     * @param int|null $nems
     */
    public function setNems(?int $nems): void
    {
        $this->nems = $nems;
    }

    /**
     * @return float|null
     */
    public function getTrio(): ?float
    {
        return $this->trio;
    }

    /**
     * @param float|null $trio
     */
    public function setTrio(?float $trio): void
    {
        $this->trio = $trio;
    }

    /**
     * @return int|null
     */
    public function getLoihurlet(): ?int
    {
        return $this->loihurlet;
    }

    /**
     * @param int|null $loihurlet
     */
    public function setLoihurlet(?int $loihurlet): void
    {
        $this->loihurlet = $loihurlet;
    }

    /**
     * @return int|null
     */
    public function getLimitationtherapeutique(): ?int
    {
        return $this->limitationtherapeutique;
    }

    /**
     * @param int|null $limitationtherapeutique
     */
    public function setLimitationtherapeutique(?int $limitationtherapeutique): void
    {
        $this->limitationtherapeutique = $limitationtherapeutique;
    }

    /**
     * @return string|null
     */
    public function getCcam(): ?string
    {
        return $this->ccam;
    }

    /**
     * @param string|null $ccam
     */
    public function setCcam(?string $ccam): void
    {
        $this->ccam = $ccam;
    }

    /**
     * @return int|null
     */
    public function getNbvoiescath(): ?int
    {
        return $this->nbvoiescath;
    }

    /**
     * @param int|null $nbvoiescath
     */
    public function setNbvoiescath(?int $nbvoiescath): void
    {
        $this->nbvoiescath = $nbvoiescath;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtpremierssignes(): ?\DateTime
    {
        return $this->dtpremierssignes;
    }

    /**
     * @param \DateTime|null $dtpremierssignes
     */
    public function setDtpremierssignes(?\DateTime $dtpremierssignes): void
    {
        $this->dtpremierssignes = $dtpremierssignes;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrpremierssignes(): ?\DateTime
    {
        return $this->hrpremierssignes;
    }

    /**
     * @param \DateTime|null $hrpremierssignes
     */
    public function setHrpremierssignes(?\DateTime $hrpremierssignes): void
    {
        $this->hrpremierssignes = $hrpremierssignes;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtlactates(): ?\DateTime
    {
        return $this->dtlactates;
    }

    /**
     * @param \DateTime|null $dtlactates
     */
    public function setDtlactates(?\DateTime $dtlactates): void
    {
        $this->dtlactates = $dtlactates;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrlactates(): ?\DateTime
    {
        return $this->hrlactates;
    }

    /**
     * @param \DateTime|null $hrlactates
     */
    public function setHrlactates(?\DateTime $hrlactates): void
    {
        $this->hrlactates = $hrlactates;
    }

    /**
     * @return int|null
     */
    public function getDhestimelactates(): ?int
    {
        return $this->dhestimelactates;
    }

    /**
     * @param int|null $dhestimelactates
     */
    public function setDhestimelactates(?int $dhestimelactates): void
    {
        $this->dhestimelactates = $dhestimelactates;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtpas(): ?\DateTime
    {
        return $this->dtpas;
    }

    /**
     * @param \DateTime|null $dtpas
     */
    public function setDtpas(?\DateTime $dtpas): void
    {
        $this->dtpas = $dtpas;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrpas(): ?\DateTime
    {
        return $this->hrpas;
    }

    /**
     * @param \DateTime|null $hrpas
     */
    public function setHrpas(?\DateTime $hrpas): void
    {
        $this->hrpas = $hrpas;
    }

    /**
     * @return int|null
     */
    public function getDhestimepas(): ?int
    {
        return $this->dhestimepas;
    }

    /**
     * @param int|null $dhestimepas
     */
    public function setDhestimepas(?int $dhestimepas): void
    {
        $this->dhestimepas = $dhestimepas;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtpao2(): ?\DateTime
    {
        return $this->dtpao2;
    }

    /**
     * @param \DateTime|null $dtpao2
     */
    public function setDtpao2(?\DateTime $dtpao2): void
    {
        $this->dtpao2 = $dtpao2;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrpao2(): ?\DateTime
    {
        return $this->hrpao2;
    }

    /**
     * @param \DateTime|null $hrpao2
     */
    public function setHrpao2(?\DateTime $hrpao2): void
    {
        $this->hrpao2 = $hrpao2;
    }

    /**
     * @return int|null
     */
    public function getDhestimepao2(): ?int
    {
        return $this->dhestimepao2;
    }

    /**
     * @param int|null $dhestimepao2
     */
    public function setDhestimepao2(?int $dhestimepao2): void
    {
        $this->dhestimepao2 = $dhestimepao2;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtcreatinine(): ?\DateTime
    {
        return $this->dtcreatinine;
    }

    /**
     * @param \DateTime|null $dtcreatinine
     */
    public function setDtcreatinine(?\DateTime $dtcreatinine): void
    {
        $this->dtcreatinine = $dtcreatinine;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrcreatinine(): ?\DateTime
    {
        return $this->hrcreatinine;
    }

    /**
     * @param \DateTime|null $hrcreatinine
     */
    public function setHrcreatinine(?\DateTime $hrcreatinine): void
    {
        $this->hrcreatinine = $hrcreatinine;
    }

    /**
     * @return int|null
     */
    public function getDhestimecreatinine(): ?int
    {
        return $this->dhestimecreatinine;
    }

    /**
     * @param int|null $dhestimecreatinine
     */
    public function setDhestimecreatinine(?int $dhestimecreatinine): void
    {
        $this->dhestimecreatinine = $dhestimecreatinine;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtinr(): ?\DateTime
    {
        return $this->dtinr;
    }

    /**
     * @param \DateTime|null $dtinr
     */
    public function setDtinr(?\DateTime $dtinr): void
    {
        $this->dtinr = $dtinr;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrinr(): ?\DateTime
    {
        return $this->hrinr;
    }

    /**
     * @param \DateTime|null $hrinr
     */
    public function setHrinr(?\DateTime $hrinr): void
    {
        $this->hrinr = $hrinr;
    }

    /**
     * @return int|null
     */
    public function getDhestimeinr(): ?int
    {
        return $this->dhestimeinr;
    }

    /**
     * @param int|null $dhestimeinr
     */
    public function setDhestimeinr(?int $dhestimeinr): void
    {
        $this->dhestimeinr = $dhestimeinr;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtbilirubine(): ?\DateTime
    {
        return $this->dtbilirubine;
    }

    /**
     * @param \DateTime|null $dtbilirubine
     */
    public function setDtbilirubine(?\DateTime $dtbilirubine): void
    {
        $this->dtbilirubine = $dtbilirubine;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrbilirubine(): ?\DateTime
    {
        return $this->hrbilirubine;
    }

    /**
     * @param \DateTime|null $hrbilirubine
     */
    public function setHrbilirubine(?\DateTime $hrbilirubine): void
    {
        $this->hrbilirubine = $hrbilirubine;
    }

    /**
     * @return int|null
     */
    public function getDhestimebilirubine(): ?int
    {
        return $this->dhestimebilirubine;
    }

    /**
     * @param int|null $dhestimebilirubine
     */
    public function setDhestimebilirubine(?int $dhestimebilirubine): void
    {
        $this->dhestimebilirubine = $dhestimebilirubine;
    }

    /**
     * @return \DateTime|null
     */
    public function getDttrombo(): ?\DateTime
    {
        return $this->dttrombo;
    }

    /**
     * @param \DateTime|null $dttrombo
     */
    public function setDttrombo(?\DateTime $dttrombo): void
    {
        $this->dttrombo = $dttrombo;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrtrombo(): ?\DateTime
    {
        return $this->hrtrombo;
    }

    /**
     * @param \DateTime|null $hrtrombo
     */
    public function setHrtrombo(?\DateTime $hrtrombo): void
    {
        $this->hrtrombo = $hrtrombo;
    }

    /**
     * @return int|null
     */
    public function getDhestimetrombo(): ?int
    {
        return $this->dhestimetrombo;
    }

    /**
     * @param int|null $dhestimetrombo
     */
    public function setDhestimetrombo(?int $dhestimetrombo): void
    {
        $this->dhestimetrombo = $dhestimetrombo;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtdebremplissage(): ?\DateTime
    {
        return $this->dtdebremplissage;
    }

    /**
     * @param \DateTime|null $dtdebremplissage
     */
    public function setDtdebremplissage(?\DateTime $dtdebremplissage): void
    {
        $this->dtdebremplissage = $dtdebremplissage;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrdebremplissage(): ?\DateTime
    {
        return $this->hrdebremplissage;
    }

    /**
     * @param \DateTime|null $hrdebremplissage
     */
    public function setHrdebremplissage(?\DateTime $hrdebremplissage): void
    {
        $this->hrdebremplissage = $hrdebremplissage;
    }

    /**
     * @return int|null
     */
    public function getCristalloide(): ?int
    {
        return $this->cristalloide;
    }

    /**
     * @param int|null $cristalloide
     */
    public function setCristalloide(?int $cristalloide): void
    {
        $this->cristalloide = $cristalloide;
    }

    /**
     * @return int|null
     */
    public function getHypertonique(): ?int
    {
        return $this->hypertonique;
    }

    /**
     * @param int|null $hypertonique
     */
    public function setHypertonique(?int $hypertonique): void
    {
        $this->hypertonique = $hypertonique;
    }

    /**
     * @return int|null
     */
    public function getAmidon(): ?int
    {
        return $this->amidon;
    }

    /**
     * @param int|null $amidon
     */
    public function setAmidon(?int $amidon): void
    {
        $this->amidon = $amidon;
    }

    /**
     * @return int|null
     */
    public function getAlbumine45(): ?int
    {
        return $this->albumine45;
    }

    /**
     * @param int|null $albumine45
     */
    public function setAlbumine45(?int $albumine45): void
    {
        $this->albumine45 = $albumine45;
    }

    /**
     * @return int|null
     */
    public function getAlbumine20(): ?int
    {
        return $this->albumine20;
    }

    /**
     * @param int|null $albumine20
     */
    public function setAlbumine20(?int $albumine20): void
    {
        $this->albumine20 = $albumine20;
    }

    /**
     * @return int|null
     */
    public function getPvifc(): ?int
    {
        return $this->pvifc;
    }

    /**
     * @param int|null $pvifc
     */
    public function setPvifc(?int $pvifc): void
    {
        $this->pvifc = $pvifc;
    }

    /**
     * @return int|null
     */
    public function getUnitplaq(): ?int
    {
        return $this->unitplaq;
    }

    /**
     * @param int|null $unitplaq
     */
    public function setUnitplaq(?int $unitplaq): void
    {
        $this->unitplaq = $unitplaq;
    }

    /**
     * @return int|null
     */
    public function getCulotsglob(): ?int
    {
        return $this->culotsglob;
    }

    /**
     * @param int|null $culotsglob
     */
    public function setCulotsglob(?int $culotsglob): void
    {
        $this->culotsglob = $culotsglob;
    }

    /**
     * @return string|null
     */
    public function getSinotropes(): ?string
    {
        return $this->sinotropes;
    }

    /**
     * @param string|null $sinotropes
     */
    public function setSinotropes(?string $sinotropes): void
    {
        $this->sinotropes = $sinotropes;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtdebinotropes(): ?\DateTime
    {
        return $this->dtdebinotropes;
    }

    /**
     * @param \DateTime|null $dtdebinotropes
     */
    public function setDtdebinotropes(?\DateTime $dtdebinotropes): void
    {
        $this->dtdebinotropes = $dtdebinotropes;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrdebinotropes(): ?\DateTime
    {
        return $this->hrdebinotropes;
    }

    /**
     * @param \DateTime|null $hrdebinotropes
     */
    public function setHrdebinotropes(?\DateTime $hrdebinotropes): void
    {
        $this->hrdebinotropes = $hrdebinotropes;
    }

    /**
     * @return int|null
     */
    public function getDosemaxinotropes(): ?int
    {
        return $this->dosemaxinotropes;
    }

    /**
     * @param int|null $dosemaxinotropes
     */
    public function setDosemaxinotropes(?int $dosemaxinotropes): void
    {
        $this->dosemaxinotropes = $dosemaxinotropes;
    }

    /**
     * @return int|null
     */
    public function getEvacutionsiteconcerne(): ?int
    {
        return $this->evacutionsiteconcerne;
    }

    /**
     * @param int|null $evacutionsiteconcerne
     */
    public function setEvacutionsiteconcerne(?int $evacutionsiteconcerne): void
    {
        $this->evacutionsiteconcerne = $evacutionsiteconcerne;
    }

    /**
     * @return \DateTime|null
     */
    public function getDtevacuation(): ?\DateTime
    {
        return $this->dtevacuation;
    }

    /**
     * @param \DateTime|null $dtevacuation
     */
    public function setDtevacuation(?\DateTime $dtevacuation): void
    {
        $this->dtevacuation = $dtevacuation;
    }

    /**
     * @return \DateTime|null
     */
    public function getHrevacuation(): ?\DateTime
    {
        return $this->hrevacuation;
    }

    /**
     * @param \DateTime|null $hrevacuation
     */
    public function setHrevacuation(?\DateTime $hrevacuation): void
    {
        $this->hrevacuation = $hrevacuation;
    }

    /**
     * @return int|null
     */
    public function getRass(): ?int
    {
        return $this->rass;
    }

    /**
     * @param int|null $rass
     */
    public function setRass(?int $rass): void
    {
        $this->rass = $rass;
    }

    /**
     * @return int|null
     */
    public function getIcdsc(): ?int
    {
        return $this->icdsc;
    }

    /**
     * @param int|null $icdsc
     */
    public function setIcdsc(?int $icdsc): void
    {
        $this->icdsc = $icdsc;
    }

    /**
     * @return int|null
     */
    public function getIcdscaltconsc(): ?int
    {
        return $this->icdscaltconsc;
    }

    /**
     * @param int|null $icdscaltconsc
     */
    public function setIcdscaltconsc(?int $icdscaltconsc): void
    {
        $this->icdscaltconsc = $icdscaltconsc;
    }

    /**
     * @return int|null
     */
    public function getIcdscinat(): ?int
    {
        return $this->icdscinat;
    }

    /**
     * @param int|null $icdscinat
     */
    public function setIcdscinat(?int $icdscinat): void
    {
        $this->icdscinat = $icdscinat;
    }

    /**
     * @return int|null
     */
    public function getIcdscdeso(): ?int
    {
        return $this->icdscdeso;
    }

    /**
     * @param int|null $icdscdeso
     */
    public function setIcdscdeso(?int $icdscdeso): void
    {
        $this->icdscdeso = $icdscdeso;
    }

    /**
     * @return int|null
     */
    public function getIcdscillu(): ?int
    {
        return $this->icdscillu;
    }

    /**
     * @param int|null $icdscillu
     */
    public function setIcdscillu(?int $icdscillu): void
    {
        $this->icdscillu = $icdscillu;
    }

    /**
     * @return int|null
     */
    public function getIcdscpsy(): ?int
    {
        return $this->icdscpsy;
    }

    /**
     * @param int|null $icdscpsy
     */
    public function setIcdscpsy(?int $icdscpsy): void
    {
        $this->icdscpsy = $icdscpsy;
    }

    /**
     * @return int|null
     */
    public function getIcdschum(): ?int
    {
        return $this->icdschum;
    }

    /**
     * @param int|null $icdschum
     */
    public function setIcdschum(?int $icdschum): void
    {
        $this->icdschum = $icdschum;
    }

    /**
     * @return int|null
     */
    public function getIcdsceve(): ?int
    {
        return $this->icdsceve;
    }

    /**
     * @param int|null $icdsceve
     */
    public function setIcdsceve(?int $icdsceve): void
    {
        $this->icdsceve = $icdsceve;
    }

    /**
     * @return int|null
     */
    public function getIcdscsympt(): ?int
    {
        return $this->icdscsympt;
    }

    /**
     * @param int|null $icdscsympt
     */
    public function setIcdscsympt(?int $icdscsympt): void
    {
        $this->icdscsympt = $icdscsympt;
    }

    /**
     * @return int|null
     */
    public function getBpsvis(): ?int
    {
        return $this->bpsvis;
    }

    /**
     * @param int|null $bpsvis
     */
    public function setBpsvis(?int $bpsvis): void
    {
        $this->bpsvis = $bpsvis;
    }

    /**
     * @return int|null
     */
    public function getBpsmbsup(): ?int
    {
        return $this->bpsmbsup;
    }

    /**
     * @param int|null $bpsmbsup
     */
    public function setBpsmbsup(?int $bpsmbsup): void
    {
        $this->bpsmbsup = $bpsmbsup;
    }

    /**
     * @return int|null
     */
    public function getBpsresp(): ?int
    {
        return $this->bpsresp;
    }

    /**
     * @param int|null $bpsresp
     */
    public function setBpsresp(?int $bpsresp): void
    {
        $this->bpsresp = $bpsresp;
    }

    /**
     * @return int|null
     */
    public function getBps(): ?int
    {
        return $this->bps;
    }

    /**
     * @param int|null $bps
     */
    public function setBps(?int $bps): void
    {
        $this->bps = $bps;
    }




}
