<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NavigationController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('blog.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
    /**
     * @Route("/vente", name="vente")
     */
    public function vente()
    {
        return $this->render('vente.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription()
    {
        return $this->render('inscription.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render('connexion.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
}
