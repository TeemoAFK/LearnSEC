<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecController extends AbstractController
{
    #[Route('/', name: 'sec')]
    public function index(): Response
    {
        return $this->render('sec/index.html.twig', [
            'controller_name' => 'SecController',
        ]);
    }
}
