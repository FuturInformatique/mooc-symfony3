<?php
namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\RouterInterface;

class AdvertController extends Controller{

    public function indexAction(RouterInterface $router) {

        $url = $router->generate('oc_advert_view', ['id' => 5]);

        return $this->render(
            'OCPlatformBundle:Advert:index.html.twig',
            [
                'name' => 'Serge',
                'url' => $url
            ]
        );
    }

    public function viewAction($id) {
        return new Response("Affichage de l'annonce d'id : ".$id);
    }

    public function slugAction($year, $slug, $_format) {
        return new Response('On affiche l\'annonce du slug "'.$slug.'", créé en "'.$year.'" et au format "'.$_format.'"');
    }

    public function addAction() {
        return new Response("Ajout (démerde toi avec ca !)");
    }

}