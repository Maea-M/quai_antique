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

    public function booking(Request $request, EntityManagerInterface $em, ): Response
    {
        $booking = new Booking();   

        $bookingForm = $this->createForm(BookingFormType::class, $booking);

        $bookingForm->handleRequest($request); 
        
        if ($bookingForm ->isSubmitted() && $bookingForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($booking);
            $em->flush();

            /* faire une route pour dire que la réservation est ok*/
            //$booking = $em->getRepository(Booking::class)->findAll();
            //return $this->render('bookingaccepted/index.html.twig', [
            //    'bookingaccepted' => $bookingaccepted,   
            //]);
        }
    

        return $this->render('booking/index.html.twig', [
            'bookingForm' => $bookingForm->createView()
        ]);
    }
}
