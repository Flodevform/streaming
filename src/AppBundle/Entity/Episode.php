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
}

