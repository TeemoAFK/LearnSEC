<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiccionarioController extends AbstractController
{
    #[Route('/diccionario', name: 'diccionario')]
    public function index(): Response
    {
        return $this->render('diccionario/index.html.twig', [
            'controller_name' => 'DiccionarioController',
        ]);
    }
}
