<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedicineController extends AbstractController
{
    #[Route('/medicina', name: 'medicine')]
    public function index(): Response
    {
        return $this->render('medicine/index.html.twig', [
            'controller_name' => 'MedicineController',
        ]);
    }
}
