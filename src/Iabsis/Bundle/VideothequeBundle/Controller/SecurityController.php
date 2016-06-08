<?php
namespace Iabsis\Bundle\VideothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContext;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="_security_login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        // ON récupère les erreurs d'authentification si le formulaire a été passé avec de mauvaises informations
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(Security::AUTHENTICATION_ERROR);
        }

        return $this->render('VideothequeBundle:Security:login.html.twig', array(
            // On envoie à notre vue le login qu'a saisi l'utilisateur précédemment
            'last_username' => $request->getSession()->get(Security::LAST_USERNAME),
            // Et les erreurs qu'il y a eut lors de la validation du formulaire
            'error'         => $error,
        ));
    }
}

?>