<?php

namespace Iabsis\Bundle\VideothequeBundle\Entity;

use Doctrine\ORM\EntityRepository;

class FilmRepository extends EntityRepository
{
    /**
     * Retourne la liste des films correspondant au genre pass� en param�tre (id)
     * Si aucun genre n'est sp�cifi�, la liste de tous les films est renvoy�e.
     * @param int $idGenre Id du genre � rechercher
     * @return Iabsis\Bundle\VideothequeBundle\Entity\Film[] Liste des films du genre demand�
     */
    public function findByGenre($idGenre = 0)
    {
        /* Cr�ation de la requ�te avec le query builder */
        $queryBuilder = $this->_em->createQueryBuilder();
        $queryBuilder->select("f, g")
                     ->from("VideothequeBundle:Film", "f")
                     ->leftJoin("f.listeDesGenres", "g");

        /* Si on re�oit un id de genre valide alors on recherche les Films de ce genre l� uniquement */
        if ((int)$idGenre > 0) {
            $queryBuilder->where("g.id=:idGenre")->setParameter("idGenre", (int)$idGenre);
        }
        /* Puis on retourne la liste des films du genre demand� */
        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * Retourne le nombre de film au total
     * @return int Renvoie le nombre de films total
     */
    public function countAll()
    {
        /*
         * On aurait tendance � vouloir faire un count() d'un fetchAll() sur le FilmRepository()
         * Cette solution foncitonne mais demande � doctrine de charger toutes les donn�es en m�moire.
         * Si on a des milliers de films, doctrine va alors cr�er des milliers d'objets Film dans la ram
         * ce qui n'est pas du tout optimis�.
         * 
         * En faisant un count comme ceci, aucune donn�es n'est charg�e en m�moire, une simple requ�te sql est 
         * lanc�e et le nombre est alors renvoy�.
         */

        /* Cr�ation de la requ�te count avec le query builder */
        $queryBuilder = $this->_em->createQueryBuilder();
        $queryBuilder->select("count(f) as total")
                     ->from("VideothequeBundle:Film", "f");

        /**
        * Comme le seul r�sultat qui nous int�resse est le count et pas du tout l'entit�,
        * On utilise getSingleScalarResult() afin de renvoyer une valeur scalaire unique
        */
        return $queryBuilder->getQuery()->getSingleScalarResult();
    }
    
}

?>