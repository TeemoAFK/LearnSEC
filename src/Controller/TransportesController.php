<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportesController extends AbstractController
{
    #[Route('/transportes', name: 'transportes')]
    public function index(): Response
    {
        return $this->render('transportes/index.html.twig', [
            'controller_name' => 'TransportesController',
        ]);
    }
}
