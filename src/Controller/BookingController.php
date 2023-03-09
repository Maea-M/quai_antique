<?php

namespace App\Controller;

use App\Entity\Booking;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\BookingFormType;


class BookingController extends AbstractController
{
    #[Route('/booking', name: 'booking')]

    public function booking(Request $request, EntityManagerInterface $entityManager): Response
    {
        $booking = new Booking();
        $form = $this->createForm(FormType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $booking->setAllergy();
            $booking->setNumberGuest();
            $booking->setDate();
            $booking->setHour();

            $entityManager->persist($booking);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('booking/index.html.twig', [
            'bookingForm' => $form->createView(),
        ]);
    }
}
