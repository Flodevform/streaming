<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SerieRepository")
 */
class Serie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=64)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text")
     */
    private $synopsis;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSaison", type="integer")
     */
    private $nbSaison;
    
    /**
     * @ORM\JoinColumn(name="saison_id")
     * @ORM\ManyToOne(targetEntity="Saison", inversedBy="series")
     */
    private $saisons;
    
    /**
     * @ORM\JoinColumn(name="genre_id")
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="seriesGenre")
     */
    private $genre;
    
    /**
     * @ORM\JoinColumn(name="pays_id")
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="series")
     */
    private $pays;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Serie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Serie
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set nbSaison
     *
     * @param integer $nbSaison
     *
     * @return Serie
     */
    public function setNbSaison($nbSaison)
    {
        $this->nbSaison = $nbSaison;

        return $this;
    }

    /**
     * Get nbSaison
     *
     * @return int
     */
    public function getNbSaison()
    {
        return $this->nbSaison;
    }

    /**
     * Set saisons
     *
     * @param \AppBundle\Entity\Saison $saisons
     *
     * @return Serie
     */
    public function setSaisons(\AppBundle\Entity\Saison $saisons = null)
    {
        $this->saisons = $saisons;

        return $this;
    }

    /**
     * Get saisons
     *
     * @return \AppBundle\Entity\Saison
     */
    public function getSaisons()
    {
        return $this->saisons;
    }

    /**
     * Set genre
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return Serie
     */
    public function setGenre(\AppBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \AppBundle\Entity\Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set pays
     *
     * @param \AppBundle\Entity\Pays $pays
     *
     * @return Serie
     */
    public function setPays(\AppBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \AppBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}
