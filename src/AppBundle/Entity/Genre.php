<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GenreRepository")
 */
class Genre
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
     * @ORM\Column(name="nom", type="string", length=64)
     */
    private $nom;
    
    /**
     * @ORM\OneToMany(targetEntity="Film", mappedBy="genre")
     */
    private $filmsGenre;
    
    /**
     * @ORM\OneToMany(targetEntity="Serie", mappedBy="genre")
     */
    private $seriesGenre;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Genre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add filmsGenre
     *
     * @param \AppBundle\Entity\Film $filmsGenre
     *
     * @return Genre
     */
    public function addFilmsGenre(\AppBundle\Entity\Film $filmsGenre)
    {
        $this->filmsGenre[] = $filmsGenre;

        return $this;
    }

    /**
     * Remove filmsGenre
     *
     * @param \AppBundle\Entity\Film $filmsGenre
     */
    public function removeFilmsGenre(\AppBundle\Entity\Film $filmsGenre)
    {
        $this->filmsGenre->removeElement($filmsGenre);
    }

    /**
     * Get filmsGenre
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilmsGenre()
    {
        return $this->filmsGenre;
    }

    /**
     * Add seriesGenre
     *
     * @param \AppBundle\Entity\Serie $seriesGenre
     *
     * @return Genre
     */
    public function addSeriesGenre(\AppBundle\Entity\Serie $seriesGenre)
    {
        $this->seriesGenre[] = $seriesGenre;

        return $this;
    }

    /**
     * Remove seriesGenre
     *
     * @param \AppBundle\Entity\Serie $seriesGenre
     */
    public function removeSeriesGenre(\AppBundle\Entity\Serie $seriesGenre)
    {
        $this->seriesGenre->removeElement($seriesGenre);
    }

    /**
     * Get seriesGenre
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeriesGenre()
    {
        return $this->seriesGenre;
    }
}
