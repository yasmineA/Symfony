<?php
# Fichier Genre.php

namespace Iabsis\Bundle\VideothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="Iabsis\Bundle\VideothequeBundle\Entity\GenreRepository")
 */
class Genre
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Film", mappedBy="listeDesGenres")
     */
    protected $listeDesFilms;

    /**
     * @ORM\Column(type="string", length=90)
     */
    protected $label;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeDesFilms = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set label
     *
     * @param string $label
     *
     * @return Genre
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Add listeDesFilm
     *
     * @param \Iabsis\Bundle\VideothequeBundle\Entity\Film $listeDesFilm
     *
     * @return Genre
     */
    public function addListeDesFilm(\Iabsis\Bundle\VideothequeBundle\Entity\Film $listeDesFilm)
    {
        $this->listeDesFilms[] = $listeDesFilm;

        return $this;
    }

    /**
     * Remove listeDesFilm
     *
     * @param \Iabsis\Bundle\VideothequeBundle\Entity\Film $listeDesFilm
     */
    public function removeListeDesFilm(\Iabsis\Bundle\VideothequeBundle\Entity\Film $listeDesFilm)
    {
        $this->listeDesFilms->removeElement($listeDesFilm);
    }

    /**
     * Get listeDesFilms
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListeDesFilms()
    {
        return $this->listeDesFilms;
    }

    /**
     * Affichage d'une entité Genre avec echo
     * @return string Représentation du genre
     */
    public function __toString()
    {
        return $this->label;

    }
}