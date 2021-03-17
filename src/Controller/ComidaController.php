<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComidaController extends AbstractController
{
    #[Route('/comida', name: 'comida')]
    public function index(): Response
    {
        return $this->render('comida/index.html.twig', [
            'controller_name' => 'ComidaController',
        ]);
    }
}
