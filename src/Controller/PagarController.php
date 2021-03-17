<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagarController extends AbstractController
{
    #[Route('/pagar', name: 'pagar')]
    public function index(): Response
    {
        return $this->render('pagar/index.html.twig', [
            'controller_name' => 'PagarController',
        ]);
    }
}
