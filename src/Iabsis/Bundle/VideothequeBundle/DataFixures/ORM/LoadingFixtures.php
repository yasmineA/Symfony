<?php
# Fichier Symfony\src\Iabsis\Bundle\VideothequeBundle\DataFixures\ORM\LoadingFixtures.php
/* Les Fixtures doivent �tres stock�es dans le namespace suivant */
namespace  Iabsis\Bundle\VideothequeBundle\DataFixtures\ORM;

/*
 *  On a besoin de recourir � l'interface FixtureInterface pour d�finir une fixture alors on le d�clare
 * Si nous n'avions pas mis ce use, on aurait d� taper
 * class LoadingFixtures implements Doctrine\Common\DataFixtures\FixtureInterface pour l'impl�mentation
 * de l'interface FixtureInterface, ce qui avouons-le n'est pas toujours tr�s pratique, surtout si on
 * veut utiliser plusieurs fois l'objet / interface en question.
 */
use Iabsis\Bundle\VideothequeBundle\Entity\Role;
use Iabsis\Bundle\VideothequeBundle\Entity\User;

/*il nous faut ce namespace pour la gestion du cryptage du mot de passe*/
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * Nous aurons besoin de nos entit�s Genre et Film �galement, on le d�clare donc ici aussi...
 */
use Iabsis\Bundle\VideothequeBundle\Entity\Genre;
use Iabsis\Bundle\VideothequeBundle\Entity\Film;

/*
 * Les fixtures sont des objets qui doivent obligatoireemnt impl�menter l'interface FixtureInterface
 */
class LoadingFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Cr�ation d'un Genre "Horreur"
        $Horreur = new Genre();
        $Horreur->setLabel("Horreur");
        // Enregistrment dans la base de donn�es
        $manager->persist($Horreur);
        $manager->flush();

        // Cr�ation d'un genre Action
        $Action = new Genre();
        $Action->setLabel("Action");
        // Enregistrment dans la base de donn�es
        $manager->persist($Action);
        $manager->flush();

        // Cr�ation d'un genre Aventure
        $Aventure = new Genre();
        $Aventure->setLabel("Aventure");
        // Enregistrment dans la base de donn�es
        $manager->persist($Aventure);
        $manager->flush();

        // Cr�ation d'un genre Science fiction
        $Science_fiction = new Genre();
        $Science_fiction->setLabel("Science fiction");
        // Enregistrment dans la base de donn�es
        $manager->persist($Science_fiction);
        $manager->flush();

        // On cr�e le film Matrix !
        $Film = new Film();
        $Film->setTitre("Matrix");
        $Film->setDescription("Un super film ou neo va se r�v�ler �tre l'�lu. Sa mission sera de sauver l'humanit� de la matrix. Mais ... Qu'est ce que la matrice ?");
        $Film->getListeDesGenres()->add($Action); 
        $Film->getListeDesGenres()->add($Science_fiction); 
        // Enregistrment dans la base de donn�es
        $manager->persist($Film);
        $manager->flush();


        // Create the roles
        $role_user = new Role();
        $role_user->setName("ROLE_USER");
        $manager->persist($role_user);
        $manager->flush();

        $role_admin = new Role();
        $role_admin->setName("ROLE_ADMIN");
        $manager->persist($role_admin);
        $manager->flush();

        // create a user
        $user = new User();

        // On donne le login Admin � notre nouvel utilisateur
        $user->setUsername('admin');

        // On cr� un salt pour am�lior� la s�curit�
        $user->setSalt(md5(time()));

        // On cr�e un mot de passe (attention, comme vous pouvez le voir, il faut utiliser les m�me param�tres
        // que sp�cifi�s dans le fichier security.yml, � savoir SHA512 avec 10 it�rations.
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        // On cr�e donc le mot de passe "admin" � partir de l'encodage choisi au-dessus
        $password = $encoder->encodePassword('password', $user->getSalt());
        // On applique le mot de passe � l'utilisateur
        $user->setPassword($password);

        $user->getUserRoles()->add($role_admin);

        $manager->persist($user);
        $manager->flush();
    }        
}
?>