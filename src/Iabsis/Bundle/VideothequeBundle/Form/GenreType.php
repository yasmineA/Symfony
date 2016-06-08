<?php

namespace Iabsis\Bundle\VideothequeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Ajout d'un champ pour le label. Aucun argument n'a été spécifié, cela veut dire qu'on laisse Symfony déterminer
            // automatiquement le meilleur type de champ à utiliser. Comme il s'agit d'un petit varchar, Symfony va utiliser
            // un champ de type texte.
            // Voyons comment détailler manuellement le champ label
            //    - Le premier paramètre désigne la propriété de l'entité qu'on souhaite modifier
            //    - Le 2ème paramètre défini le type de champ de formulaire à utiliser (la liste est disponible sur http://symfony.com/fr/doc/current/reference/forms/types.html)
            //    - Le 3ème paramètre sert à spécifier des options diverses pour le champ de formulaire comme par exemple un label personnalisé
            ->add('label', null, array('label' => "Genre de film"))
            // Ajout du champ 'listeDesFilms' permettant de choisir directement les films associés à ce genre
            // Si on ne spécifie pas d'argument, Symfony va générer automatiquement le type de champ adéquat (ici un select box multiple permettant de choisir un ou plusieurs films)
            // Cette syntaxe équivaut à la suivante :
            //     ->add('listeDesFilms', 'entity', array(
            //       'class' => 'IabsisVideothequeBundle:Film',
            //       'multiple' => true,
            //       'label' => "Liste des films"
            //    ));
            //
            ->add('listeDesFilms');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Iabsis\VideothequeBundle\Entity\Genre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        // Identifiant du formulaire
        return 'videothequebundle_genre';
    }

    
}

