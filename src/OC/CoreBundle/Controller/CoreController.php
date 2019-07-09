<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CoreController extends AbstractController
{
    public function indexAction()
    {
        return $this->render('OCCoreBundle:Core:index.html.twig');
    }

    public function contactAction() {
        // Prépare un flash message pour le visiteur
        $this->addFlash('notice', 'La page de contact n\'est pas encore disponible.');

        // Redirige vers la page de visualisation de l'annonce
        return $this->redirectToRoute('oc_core_homepage');
    }
}
