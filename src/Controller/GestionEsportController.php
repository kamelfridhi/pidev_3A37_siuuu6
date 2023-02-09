<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionEsportController extends AbstractController
{
    #[Route('/gestion/esport', name: 'app_gestion_esport')]
    public function index(): Response
    {
        return $this->render('gestion_esport/index.html.twig', [
            'controller_name' => 'GestionEsportController',
        ]);
    }
    /**
     * @Route("/front", name="welcome_front")
     */
    public function welcomefront(): Response
    {
        return $this->render('Front_Template/welcome.html.twig',[
            'controller_name' => 'GestionEsportController',
        ]);;
    }
}
