<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilmRepository")
 */
class Film
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
     * @ORM\Column(name="synopsis", type="text", nullable=true)
     */
    private $synopsis;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneeProd", type="datetime")
     */
    private $anneeProd;
    
    /**
     * @ORM\JoinColumn(name="genre_id")
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="filmsGenre")
     */
    private $genre;
    
    /**
     * @ORM\JoinColumn(name="pays_id")
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="films")
     */
    private $pays;
    
    /**
     * @ORM\OneToMany(targetEntity="Lien", mappedBy="film")
     */
    private $urls;
    
    /**
     * @ORM\JoinTable(name="films_realises")
     * @ORM\ManyToMany(targetEntity="casting", inversedBy="filmsRealises")
     */
    private $realisateurs;


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
     * @return Film
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
     * @return Film
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
     * Set duree
     *
     * @param integer $duree
     *
     * @return Film
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set anneeProd
     *
     * @param \DateTime $anneeProd
     *
     * @return Film
     */
    public function setAnneeProd($anneeProd)
    {
        $this->anneeProd = $anneeProd;

        return $this;
    }

    /**
     * Get anneeProd
     *
     * @return \DateTime
     */
    public function getAnneeProd()
    {
        return $this->anneeProd;
    }

    /**
     * Set genre
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return Film
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
     * @return Film
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->urls = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add url
     *
     * @param \AppBundle\Entity\Lien $url
     *
     * @return Film
     */
    public function addUrl(\AppBundle\Entity\Lien $url)
    {
        $this->urls[] = $url;

        return $this;
    }

    /**
     * Remove url
     *
     * @param \AppBundle\Entity\Lien $url
     */
    public function removeUrl(\AppBundle\Entity\Lien $url)
    {
        $this->urls->removeElement($url);
    }

    /**
     * Get urls
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Add realisateur
     *
     * @param \AppBundle\Entity\casting $realisateur
     *
     * @return Film
     */
    public function addRealisateur(\AppBundle\Entity\casting $realisateur)
    {
        $this->realisateurs[] = $realisateur;

        return $this;
    }

    /**
     * Remove realisateur
     *
     * @param \AppBundle\Entity\casting $realisateur
     */
    public function removeRealisateur(\AppBundle\Entity\casting $realisateur)
    {
        $this->realisateurs->removeElement($realisateur);
    }

    /**
     * Get realisateurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRealisateurs()
    {
        return $this->realisateurs;
    }
}
