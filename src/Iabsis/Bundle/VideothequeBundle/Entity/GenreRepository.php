<?php

namespace Iabsis\Bundle\VideothequeBundle\Entity;

use Doctrine\ORM\EntityRepository;

class GenreRepository extends EntityRepository
{
    public function fetchAllWithFilmsCount()
    {
       /* Cr�ation de la requ�te avec le query builder */
        $queryBuilder = $this->_em->createQueryBuilder();
        $queryBuilder->select("g as genre, count(f) as nbConcernedFilms")
                     ->from("VideothequeBundle:Genre", "g")
                     ->leftJoin("g.listeDesFilms", "f")
                     ->groupBy("g");
       /* On retourne les enregistrements, il s'agira d'un table multidimentionnel
        * Le premier param�tre "genre" contiendra notre entit� genre
        * Le 2�me param�tre nbConcernedFilms contient le nombre de films du genre
        * On aurait pu tout simplement faire un findAll() en y mettant une jointure et compter
        * simplement le nombre de genre associ�s, mais cela chargerait les donn�es des genres qui
        * nous sont ici inutiles.
        */
        return $queryBuilder->getQuery()->getResult();

    }
}

?>