<?php
namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends AbstractController {

    /**
     * Liste des annonces
     * @param $page
     * @return Response
     */
    public function indexAction($page) {

        // On ne sais pas combien de page il y a, mais ca doit être >= 1 dans tous les cas
        if ($page < 1) {
            throw $this->createNotFoundException('Page "'.$page.'" inexistante ou invalide.');
        }

        // Récupération de la liste des annonces, et passage au template
        // TODO

        // Render du template
        return $this->render('OCPlatformBundle:Advert:index.html.twig', [
            'page' => $page,
        ]);
    }

    /**
     * Visualisation d'une annonce particulière
     * @param $id
     * @return Response
     */
    public function viewAction($id) {

        // Récupère l'annonce dont l'id vaut $id
        // TODO

        return $this->render('OCPlatformBundle:Advert:view.html.twig', [
            'id' => $id,
        ]);
    }

    /**
     * Ajout d'une nouvelle annonce
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function addAction(Request $request) {

        // Si la requête est en POST, le visiteur a soumis un formulaire
        if ($request->isMethod('POST')) {
            // Création / gestion du formulaire
            // TODO
            $id = 5;

            // Prépare un flash message pour le visiteur
            $this->addFlash('notice', 'Annonce enregistrée.');

            // Redirige vers la page de visualisation de l'annonce
            return $this->redirectToRoute('oc_advert_view', ['id' => $id]);
        }

        // Sinon on affiche le formulaire
        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }

    /**
     * Modification d'une annonce existante
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function editAction($id, Request $request) {

        // Récupère l'annonce dont l'id vaut $id
        // TODO

        // Si la requête est en POST, le visiteur a soumis un formulaire
        if ($request->isMethod('POST')) {
            // Création / gestion du formulaire
            // TODO
            $id = 5;

            // Prépare un flash message pour le visiteur
            $this->addFlash('notice', 'Annonce modifiée.');

            // Redirige vers la page de visualisation de l'annonce
            return $this->redirectToRoute('oc_advert_view', ['id' => $id]);
        }

        // Sinon on affiche le formulaire
        return $this->render('OCPlatformBundle:Advert:edit.html.twig');
    }

    public function deleteAction($id) {

        // Récupère l'annonce dont l'id vaut $id
        // TODO

        // Suppression de l'annonce
        // TODO

        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }

}