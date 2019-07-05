<?php
namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AdvertController extends AbstractController {

    public function indexAction($page) {

        $url = $this->generateUrl('oc_advert_view', ['id' => 5]);
        $abs_url = $this->generateUrl('oc_advert_view', ['id' => 5], UrlGeneratorInterface::ABSOLUTE_URL);

        return $this->render(
            'OCPlatformBundle:Advert:index.html.twig',
            [
                'name' => 'Serge',
                'url' => $url,
                'abs_url' => $abs_url,
                'page' => $page,
            ]
        );
    }

    public function viewAction($id) {

        return $this->render(
            'OCPlatformBundle:Advert:view.html.twig',
            [
                'id' => $id,
            ]
        );
    }

    public function slugAction($year, $slug, $_format) {
        return new Response('On affiche l\'annonce du slug "'.$slug.'", créé en "'.$year.'" et au format "'.$_format.'"');
    }

    public function addAction() {

        $this->addFlash('info', "Annonce bien enregistrée !");
        $this->addFlash('info', "Si si, elle est bien enregistrée qu'on te dit !");

        return $this->redirectToRoute('oc_advert_view', ['id' => 5]);
    }

    public function editAction($id) {
        return new Response("Modifier");
    }

    public function deleteAction($id) {
        return new Response("Supprimer");
    }

}