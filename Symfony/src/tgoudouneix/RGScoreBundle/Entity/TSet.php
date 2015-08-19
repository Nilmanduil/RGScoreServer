<?php

namespace tgoudouneix\RGScoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TSet
 *
 * @ORM\Table(name="tset")
 * @ORM\Entity(repositoryClass="tgoudouneix\RGScoreBundle\Entity\TSetRepository")
 */
class TSet
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
     * @ORM\Column(name="jeuxJoueur1", type="integer")
     */
    private $jeuxJoueur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="jeuxJoueur2", type="integer")
     */
    private $jeuxJoueur2;
    
    /**
     * @var boolean
     * 
     * @ORM\Column(name="Termine", type="boolean")
     */
    private $termine;
    
    /**
     * @var tgoudouneix\RGScoreBundle\Entity\TMatch
     * 
     * @ORM\ManyToOne(targetEntity="tgoudouneix\RGScoreBundle\Entity\TMatch", inversedBy="tsets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tmatch;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="tgoudouneix\RGScoreBundle\Entity\Jeu", mappedBy="tset")
     */
    private $jeux;


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
     * Set jeuxJoueur1
     *
     * @param integer $jeuxJoueur1
     * @return TSet
     */
    public function setJeuxJoueur1($jeuxJoueur1)
    {
        $this->jeuxJoueur1 = $jeuxJoueur1;
    
        return $this;
    }

    /**
     * Get jeuxJoueur1
     *
     * @return integer 
     */
    public function getJeuxJoueur1()
    {
        return $this->jeuxJoueur1;
    }

    /**
     * Set jeuxJoueur2
     *
     * @param integer $jeuxJoueur2
     * @return TSet
     */
    public function setJeuxJoueur2($jeuxJoueur2)
    {
        $this->jeuxJoueur2 = $jeuxJoueur2;
    
        return $this;
    }

    /**
     * Get jeuxJoueur2
     *
     * @return integer 
     */
    public function getJeuxJoueur2()
    {
        return $this->jeuxJoueur2;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->jeux = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setJeuxJoueur1(0);
        $this->setJeuxJoueur2(0);
        $this->setTermine(false);
    }

    /**
     * Set tmatch
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\TMatch $tmatch
     * @return TSet
     */
    public function setTmatch(\tgoudouneix\RGScoreBundle\Entity\TMatch $tmatch)
    {
        $this->tmatch = $tmatch;
    
        return $this;
    }

    /**
     * Get tmatch
     *
     * @return \tgoudouneix\RGScoreBundle\Entity\TMatch 
     */
    public function getTmatch()
    {
        return $this->tmatch;
    }

    /**
     * Add jeux
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Jeu $jeux
     * @return TSet
     */
    public function addJeux(\tgoudouneix\RGScoreBundle\Entity\Jeu $jeux)
    {
        $this->jeux[] = $jeux;
    
        return $this;
    }

    /**
     * Remove jeux
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Jeu $jeux
     */
    public function removeJeux(\tgoudouneix\RGScoreBundle\Entity\Jeu $jeux)
    {
        $this->jeux->removeElement($jeux);
    }

    /**
     * Get jeux
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJeux()
    {
        return $this->jeux;
    }

    /**
     * Set termine
     *
     * @param boolean $termine
     * @return TSet
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
