<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcuadorController extends AbstractController
{
    #[Route('/ecuador', name: 'ecuador')]
    public function index(): Response
    {
        return $this->render('ecuador/index.html.twig', [
            'controller_name' => 'EcuadorController',
        ]);
    }
}
