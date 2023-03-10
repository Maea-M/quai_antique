<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Form\BookingFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class BookingController extends AbstractController
{
    #[Route('/booking', name: 'booking')]

    public function booking(Request $request, EntityManagerInterface $entityManager ): Response
    {
        $booking = new Booking();   
        $bookingForm = $this->createForm(BookingFormType::class, $booking);
        $bookingForm->handleRequest($request); 
        
        // problème avec getDoctrine : revoir replay de C. Chevalier
        //lors de l'envoi de la requ^te
        // mettre label en français
        //nombre d'invités peut être néagtif... mettre une valeur min
        // mettre une valeur max
        if ($bookingForm ->isSubmitted() && $bookingForm->isValid()) {
            $booking->getName();
            $booking->getNumberGuest();
            $booking->getDate();
            $booking->getHour();
            $booking->getAllergy();

            $entityManager->persist($booking);
            $entityManager->flush();

            /* faire une route pour dire que la réservation est ok ou non 
            ou alors une modale ?*/
            return $this->redirectToRoute('home');

        }
    

        return $this->render('booking/index.html.twig', [
            'bookingForm' => $bookingForm->createView()
        ]);
    }
}
