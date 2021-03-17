<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VocabularioController extends AbstractController
{
    #[Route('/vocabulario', name: 'vocabulario')]
    public function index(): Response
    {
        return $this->render('vocabulario/index.html.twig', [
            'controller_name' => 'VocabularioController',
        ]);
    }
}
