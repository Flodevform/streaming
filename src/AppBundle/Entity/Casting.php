<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Casting
 *
 * @ORM\Table(name="casting")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CastingRepository")
 */
class Casting
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
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=64)
     */
    private $prenom;
    
    /**
     * @ORM\ManyToMany(targetEntity="Film", mappedBy="realisateurs")
     */
    private $filmsRealises;


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
     * @return Casting
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Casting
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->filmsRealises = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add filmsRealise
     *
     * @param \AppBundle\Entity\Film $filmsRealise
     *
     * @return Casting
     */
    public function addFilmsRealise(\AppBundle\Entity\Film $filmsRealise)
    {
        $this->filmsRealises[] = $filmsRealise;

        return $this;
    }

    /**
     * Remove filmsRealise
     *
     * @param \AppBundle\Entity\Film $filmsRealise
     */
    public function removeFilmsRealise(\AppBundle\Entity\Film $filmsRealise)
    {
        $this->filmsRealises->removeElement($filmsRealise);
    }

    /**
     * Get filmsRealises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilmsRealises()
    {
        return $this->filmsRealises;
    }
}
