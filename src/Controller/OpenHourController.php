<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OpenHourRepository;

class OpenHourController extends AbstractController
{
    #[Route('/hour', name: 'hour')]
    public function openhour(OpenHourRepository $OpenHourRepository): Response
    {
        $openhours = $OpenHourRepository ->findBy([], ['id' => 'asc']);

        return $this->render('hour/index.html.twig', [
            'openhours' => $openhours,
        ]);
    }
}
