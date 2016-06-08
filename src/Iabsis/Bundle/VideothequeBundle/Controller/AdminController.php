<?php

namespace Iabsis\Bundle\VideothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Genre controller.
 *
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * Lists all Film entities.
     *
     * @Route("/", name="videotheque_admin")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        /**
         * Comme @Template() est vide, il va chercher par d�faut le fichier dans VideothequeBundle/views/Admin/index.html.twig
         */
        return array();
    }
}

?>