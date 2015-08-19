<?php

namespace tgoudouneix\RGScoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echange
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="tgoudouneix\RGScoreBundle\Entity\EchangeRepository")
 */
class Echange
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
     * @var \DateTime
     * 
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @var tgoudouneix\RGScoreBundle\Entity\Joueur
     * 
     * @ORM\ManyToOne(targetEntity="tgoudouneix\RGScoreBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gagnant;

    /**
     * @var Jeu
     * 
     * @ORM\ManyToOne(targetEntity="tgoudouneix\RGScoreBundle\Entity\Jeu", inversedBy="echanges")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jeu;
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->date = new \DateTime();
    }

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
     * Set date
     *
     * @param \DateTime $date
     * @return Echange
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set gagnant
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Joueur $gagnant
     * @return Echange
     */
    public function setGagnant(\tgoudouneix\RGScoreBundle\Entity\Joueur $gagnant)
    {
        $this->gagnant = $gagnant;
    
        return $this;
    }

    /**
     * Get gagnant
     *
     * @return \tgoudouneix\RGScoreBundle\Entity\Joueur 
     */
    public function getGagnant()
    {
        return $this->gagnant;
    }

    /**
     * Set jeu
     *
     * @param \tgoudouneix\RGScoreBundle\Entity\Jeu $jeu
     * @return Echange
     */
    public function setJeu(\tgoudouneix\RGScoreBundle\Entity\Jeu $jeu)
    {
        $this->jeu = $jeu;
    
        return $this;
    }

    /**
     * Get jeu
     *
     * @return \tgoudouneix\RGScoreBundle\Entity\Jeu 
     */
    public function getJeu()
    {
        return $this->jeu;
    }
}
