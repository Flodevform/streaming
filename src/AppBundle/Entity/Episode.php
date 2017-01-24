<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpisodeRepository")
 */
class Episode
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
     * @var int
     *
     * @ORM\Column(name="numEpisode", type="integer")
     */
    private $numEpisode;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;
    
    /**
     * @ORM\OneToMany(targetEntity="Lien", mappedBy="serie")
     */
    private $urls;
    
    /**
     * @ORM\OneToMany(targetEntity="Saison", mappedBy="episode")
     */
    private $saisons;


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
     * Set numEpisode
     *
     * @param integer $numEpisode
     *
     * @return Episode
     */
    public function setNumEpisode($numEpisode)
    {
        $this->numEpisode = $numEpisode;

        return $this;
    }

    /**
     * Get numEpisode
     *
     * @return int
     */
    public function getNumEpisode()
    {
        return $this->numEpisode;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Episode
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
     * Constructor
     */
    public function __construct()
    {
        $this->saisons = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add saison
     *
     * @param \AppBundle\Entity\Saison $saison
     *
     * @return Episode
     */
    public function addSaison(\AppBundle\Entity\Saison $saison)
    {
        $this->saisons[] = $saison;

        return $this;
    }

    /**
     * Remove saison
     *
     * @param \AppBundle\Entity\Saison $saison
     */
    public function removeSaison(\AppBundle\Entity\Saison $saison)
    {
        $this->saisons->removeElement($saison);
    }

    /**
     * Get saisons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaisons()
    {
        return $this->saisons;
    }

    /**
     * Add url
     *
     * @param \AppBundle\Entity\Lien $url
     *
     * @return Episode
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
}
