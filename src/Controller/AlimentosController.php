<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlimentosController extends AbstractController
{
    #[Route('/alimentos', name: 'alimentos')]
    public function index(): Response
    {
        return $this->render('alimentos/index.html.twig', [
            'controller_name' => 'AlimentosController',
        ]);
    }
}
