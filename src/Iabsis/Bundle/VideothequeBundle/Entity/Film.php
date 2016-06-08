<?php
# Fichier Film.php

/*******************************************************************************************
 *  Namespace dans lequel se trouvera notre objet "Film" .
 * Les namespace servent à définir un espace de noms dans lesquels seront stockés notre objet.
 * Ici on dit que notre classe Genre fait partit de l'espace de Nom Entity,
 * ainsi  Symfony saura qu'il s'agit bien d'une entité.
 *
 * Dès lors qu'on utilisera l'instruction "use Iabsis\Bundle\VideothequeBundle\Entity\Film" dans un fichier PHP,
 * on pourra accéder à notre entité sans utiliser à chaque fois une référence complète vers l'objet !
 *
 * On pourra donc faire new Film() au lieu de new Iabsis\Bundle\VideothequeBundle\Entity\Film();
 ********************************************************************************************/

namespace Iabsis\Bundle\VideothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*******************************************************************************************
 *
 * Ci-dessous, nous allons décrire notre table, telle qu'elle sera gérée par Doctrine.
 *
 * Vous allez voir des commentaires faisant apparaître le mot clé @ORM,
 * ces balises sont très importantes, elles permettent principalement de définir de quel
 * type de champ il s'agit. Ainsi Doctrine saura comment créé ce champ dans la base
 * de données de votre choix.
 *
 *******************************************************************************************/
/**
 * @ORM\Entity(repositoryClass="Iabsis\Bundle\VideothequeBundle\Entity\FilmRepository")
 */
class Film
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
     * @ORM\ManyToMany(targetEntity="Genre", inversedBy="listeDesFilms")
     * @ORM\JoinTable(name="_assoc_film_genre",
     *   joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="film_id", referencedColumnName="id")}
     * )
     */
    protected $listeDesGenres;

    /**
     * @ORM\Column(type="string", length=90)
     */
    protected $titre;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeDesGenres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set description
     *
     * @param string $description
     *
     * @return Film
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add listeDesGenre
     *
     * @param \Iabsis\Bundle\VideothequeBundle\Entity\Genre $listeDesGenre
     *
     * @return Film
     */
    public function addListeDesGenre(\Iabsis\Bundle\VideothequeBundle\Entity\Genre $listeDesGenre)
    {
        $this->listeDesGenres[] = $listeDesGenre;

        return $this;
    }

    /**
     * Remove listeDesGenre
     *
     * @param \Iabsis\Bundle\VideothequeBundle\Entity\Genre $listeDesGenre
     */
    public function removeListeDesGenre(\Iabsis\Bundle\VideothequeBundle\Entity\Genre $listeDesGenre)
    {
        $this->listeDesGenres->removeElement($listeDesGenre);
    }

    /**
     * Get listeDesGenres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListeDesGenres()
    {
        return $this->listeDesGenres;
    }

    /**
     * Affichage d'une entité Film avec echo
     * @return string Représentation du film
     */
    public function __toString()
    {
        return $this->titre;
    }
}

