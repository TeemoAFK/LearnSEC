<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AbecedarioController extends AbstractController
{
    #[Route('/abecedario', name: 'abecedario')]
    public function index(): Response
    {
        return $this->render('abecedario/index.html.twig', [
            'controller_name' => 'AbecedarioController',
        ]);
    }
}
