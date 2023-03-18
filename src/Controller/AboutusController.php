<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutusController extends AbstractController
{
    #[Route('/aboutus', name: 'aboutus')]
    public function index(): Response
    {
        return $this->render('home/aboutus/index.html.twig', [
            'controller_name' => 'AboutusController',
        ]);
    }
}
