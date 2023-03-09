<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OpenHourRepository;

class HourController extends AbstractController
{
    #[Route('/hour', name: 'hour2')]
    public function hour(OpenHourRepository $OpenHourRepository): Response
    {
        $openhours = $OpenHourRepository ->findBy([], ['id' => 'asc']);

        return $this->render('home/hour/index.html.twig', [
            'openhours' => $openhours,
        ]);
    }
}
