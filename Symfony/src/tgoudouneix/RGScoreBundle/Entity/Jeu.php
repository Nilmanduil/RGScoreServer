<?php

namespace tgoudouneix\RGScoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jeu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="tgoudouneix\RGScoreBundle\Entity\JeuRepository")
 */
class Jeu
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
     * @ORM\Column(name="pointsJoueur1", type="integer")
     */
    private $pointsJoueur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointsJoueur2", type="integer")
     */
    private $pointsJoueur2;
    
    /**
     * @var boolean
     * 
     * @ORM\Column(name="Termine", type="boolean")
     */
    private $termine;
    
    /**
     * @var tgoudouneix\RGScoreBundle\Entity\TSet
     * 
     * @ORM\ManyToOne(targetEntity="tgoudouneix\RGScoreBundle\Entity\TSet", inversedBy="jeux")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tset;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="tgoudouneix\RGScoreBundle\Entity\Echange", mappedBy="jeu")
     */
    private $echanges;


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
     * Set pointsJoueur1
     *
     * @param integer $pointsJoueur1
     * @return Jeu
     */
    public function setPointsJoueur1($pointsJoueur1)
    {
        $this->pointsJoueur1 = $pointsJoueur1;
    
        return $this;
    }

    /**
     * Get pointsJoueur1
     *
     * @return integer 
     */
    public function getPointsJoueur1()
    {
        return $this->pointsJoueur1;
    }

    /**
     * Set pointsJoueur2
     *
     * @param integer $pointsJoueur2
     * @return Jeu
     */
    public function setPointsJoueur2($pointsJoueur2)
    {
        $this->pointsJoueur2 = $pointsJoueur2;
    
        return $this;
    }

    /**
     * Get pointsJoueur2
     *
     * @return integer 
     */
    public function getPointsJoueur2()
    {
        return $this->pointsJoueur2;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->echanges = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setPointsJoueur1(0);
        $this->setPointsJoueur2(0);
        $this->setTermine(false);
    }

    /**
     * Set tset
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\TSet $tset
     * @return Jeu
     */
    public function setTset(\tgoudouneix\RGScoreBundle\Entity\TSet $tset)
    {
        $this->tset = $tset;
    
        return $this;
    }

    /**
     * Get tset
     *
     * @return \tgoudouneix\RGScoreBundle\Entity\TSet 
     */
    public function getTset()
    {
        return $this->tset;
    }

    /**
     * Add echanges
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Echange $echanges
     * @return Jeu
     */
    public function addEchange(\tgoudouneix\RGScoreBundle\Entity\Echange $echanges)
    {
        $this->echanges[] = $echanges;
    
        return $this;
    }

    /**
     * Remove echanges
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Echange $echanges
     */
    public function removeEchange(\tgoudouneix\RGScoreBundle\Entity\Echange $echanges)
    {
        $this->echanges->removeElement($echanges);
    }

    /**
     * Get echanges
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEchanges()
    {
        return $this->echanges;
    }

    /**
     * Set termine
     *
     * @param boolean $termine
     * @return Jeu
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
}
