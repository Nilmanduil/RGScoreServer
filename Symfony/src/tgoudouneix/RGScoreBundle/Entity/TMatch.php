<?php

namespace tgoudouneix\RGScoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMatch
 *
 * @ORM\Table(name="tmatch")
 * @ORM\Entity(repositoryClass="tgoudouneix\RGScoreBundle\Entity\TMatchRepository")
 */
class TMatch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="SetsJoueur1", type="integer")
     */
    private $setsJoueur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="SetsJoueur2", type="integer")
     */
    private $setsJoueur2;
    
    /**
     * @var boolean
     * 
     * @ORM\Column(name="Termine", type="boolean")
     */
    private $termine;
    
    /**
     * @var tgoudouneix\RGScoreBundle\Entity\Arbitre
     * 
     * @ORM\ManyToOne(targetEntity="tgoudouneix\RGScoreBundle\Entity\Arbitre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $arbitre;

    /**
     * @var tgoudouneix\RGScoreBundle\Entity\Court
     * 
     * @ORM\ManyToOne(targetEntity="tgoudouneix\RGScoreBundle\Entity\Court")
     * @ORM\JoinColumn(nullable=false)
     */
    private $court;
    
    /**
     * @var tgoudouneix\RGScoreBundle\Entity\Joueur
     * 
     * @ORM\ManyToOne(targetEntity="tgoudouneix\RGScoreBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur1;
    
    /**
     * @var tgoudouneix\RGScoreBundle\Entity\Joueur
     * 
     * @ORM\ManyToOne(targetEntity="tgoudouneix\RGScoreBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur2;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="tgoudouneix\RGScoreBundle\Entity\TSet", mappedBy="tmatch")
     */
    private $tsets;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set setsJoueur1
     *
     * @param integer $setsJoueur1
     * @return TMatch
     */
    public function setSetsJoueur1($setsJoueur1)
    {
        $this->setsJoueur1 = $setsJoueur1;
    
        return $this;
    }

    /**
     * Get setsJoueur1
     *
     * @return integer 
     */
    public function getSetsJoueur1()
    {
        return $this->setsJoueur1;
    }

    /**
     * Set setsJoueur2
     *
     * @param integer $setsJoueur2
     * @return TMatch
     */
    public function setSetsJoueur2($setsJoueur2)
    {
        $this->setsJoueur2 = $setsJoueur2;
    
        return $this;
    }

    /**
     * Get setsJoueur2
     *
     * @return integer 
     */
    public function getSetsJoueur2()
    {
        return $this->setsJoueur2;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tsets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setSetsJoueur1(0);
        $this->setSetsJoueur2(0);
        $this->setTermine(false);
    }

    /**
     * Set termine
     *
     * @param boolean $termine
     * @return TMatch
     */
    public function setTermine($termine)
    {
        $this->termine = $termine;
    
        return $this;
    }

    /**
     * Get termine
     *
     * @return boolean 
     */
    public function getTermine()
    {
        return $this->termine;
    }

    /**
     * Set arbitre
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Arbitre $arbitre
     * @return TMatch
     */
    public function setArbitre(\tgoudouneix\RGScoreBundle\Entity\Arbitre $arbitre)
    {
        $this->arbitre = $arbitre;
    
        return $this;
    }

    /**
     * Get arbitre
     *
     * @return \tgoudouneix\RGScoreBundle\Entity\Arbitre 
     */
    public function getArbitre()
    {
        return $this->arbitre;
    }

    /**
     * Set court
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Court $court
     * @return TMatch
     */
    public function setCourt(\tgoudouneix\RGScoreBundle\Entity\Court $court)
    {
        $this->court = $court;
    
        return $this;
    }

    /**
     * Get court
     *
     * @return \tgoudouneix\RGScoreBundle\Entity\Court 
     */
    public function getCourt()
    {
        return $this->court;
    }

    /**
     * Set joueur1
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Joueur $joueur1
     * @return TMatch
     */
    public function setJoueur1(\tgoudouneix\RGScoreBundle\Entity\Joueur $joueur1)
    {
        $this->joueur1 = $joueur1;
    
        return $this;
    }

    /**
     * Get joueur1
     *
     * @return \tgoudouneix\RGScoreBundle\Entity\Joueur 
     */
    public function getJoueur1()
    {
        return $this->joueur1;
    }

    /**
     * Set joueur2
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Joueur $joueur2
     * @return TMatch
     */
    public function setJoueur2(\tgoudouneix\RGScoreBundle\Entity\Joueur $joueur2)
    {
        $this->joueur2 = $joueur2;
    
        return $this;
    }

    /**
     * Get joueur2
     *
     * @return \tgoudouneix\RGScoreBundle\Entity\Joueur 
     */
    public function getJoueur2()
    {
        return $this->joueur2;
    }

    /**
     * Add tsets
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\TSet $tsets
     * @return TMatch
     */
    public function addTset(\tgoudouneix\RGScoreBundle\Entity\TSet $tsets)
    {
        $this->tsets[] = $tsets;
    
        return $this;
    }

    /**
     * Remove tsets
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\TSet $tsets
     */
    public function removeTset(\tgoudouneix\RGScoreBundle\Entity\TSet $tsets)
    {
        $this->tsets->removeElement($tsets);
    }

    /**
     * Get tsets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTsets()
    {
        return $this->tsets;
    }
}
