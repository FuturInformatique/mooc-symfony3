<?php
namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller{
    public function indexAction() {
        return $this->render(
            'OCPlatformBundle:Advert:index.html.twig',
            ['name' => 'Serge']
        );
    }
}