<?php
namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use OC\PlatformBundle\Antispam\OCAntispam;

use \DateTime;

class AdvertController extends AbstractController {

    /**
     * Liste des annonces
     * @param $page
     * @return Response
     * @throws \Exception
     */
    public function indexAction($page) {

        // On ne sais pas combien de page il y a, mais ca doit être >= 1 dans tous les cas
        if ($page < 1) {
            throw $this->createNotFoundException('Page "'.$page.'" inexistante ou invalide.');
        }

        // Récupération de la liste des annonces, et passage au template
        $listAdverts = array(
            array(
                'title'   => 'Recherche développpeur Symfony',
                'id'      => 1,
                'author'  => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
                'date'    => new Datetime()),
            array(
                'title'   => 'Mission de webmaster',
                'id'      => 2,
                'author'  => 'Hugo',
                'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
                'date'    => new Datetime()),
            array(
                'title'   => 'Offre de stage webdesigner',
                'id'      => 3,
                'author'  => 'Mathieu',
                'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
                'date'    => new Datetime())
        );

        // Render du template
        return $this->render('OCPlatformBundle:Advert:index.html.twig', [
            'page' => $page,
            'listAdverts' => $listAdverts
        ]);
    }

    /**
     * Affiche un menu contenant des annonces
     * @return Response
     */
    public function menuAction() {
        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony 3.4'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner'),
        );

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', [
            'listAdverts' => $listAdverts
        ]);
    }

    /**
     * Visualisation d'une annonce existante
     * @param $id
     * @return Response
     * @throws \Exception
     */
    public function viewAction($id) {

        // Récupère l'annonce dont l'id vaut $id
        $advert = array(
            'title'   => 'Recherche développpeur Symfony2',
            'id'      => $id,
            'author'  => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
            'date'    => new Datetime()
        );

        return $this->render('OCPlatformBundle:Advert:view.html.twig', [
            'advert' => $advert,
        ]);
    }

    /**
     * Ajout d'une nouvelle annonce
     * @param Request $request
     * @param OCAntispam $antispam
     * @return RedirectResponse|Response
     */
    public function addAction(Request $request, OCAntispam $antispam) {

        //--- Test service
        $text = "coucou";
        if ($antispam->isSpam($text)) {
            throw new \Exception('Votre message a été détecté comme spam ! (c\'est pas bien)');
        }
        //--- END

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
     * @return RedirectResponse|Response
     * @throws \Exception
     */
    public function editAction($id, Request $request) {

        // Récupère l'annonce dont l'id vaut $id
        $advert = array(
            'title'   => 'Recherche développpeur Symfony',
            'id'      => $id,
            'author'  => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
            'date'    => new Datetime()
        );

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
        return $this->render('OCPlatformBundle:Advert:edit.html.twig', [
            'advert' => $advert
        ]);
    }

    /**
     * Supprime une annonce existante
     * @param $id
     * @return Response
     */
    public function deleteAction($id) {

        // Récupère l'annonce dont l'id vaut $id
        // TODO

        // Suppression de l'annonce
        // TODO

        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }

}