<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrasesController extends AbstractController
{
    #[Route('/frases', name: 'frases')]
    public function index(): Response
    {
        return $this->render('frases/index.html.twig', [
            'controller_name' => 'FrasesController',
        ]);
    }
}
