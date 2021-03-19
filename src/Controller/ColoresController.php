<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColoresController extends AbstractController
{
    #[Route('/colores', name: 'colores')]
    public function index(): Response
    {
        return $this->render('colores/index.html.twig', [
            'controller_name' => 'ColoresController',
        ]);
    }
}
