<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookingValidController extends AbstractController
{
    #[Route('/bookingvalid', name: 'bookingvalid')]
    public function index(): Response
    {
        return $this->render('booking_valid/index.html.twig', [
            'controller_name' => 'BookingValidController',
        ]);
    }
}
