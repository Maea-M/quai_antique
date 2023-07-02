<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Form\BookingFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\BookingRepository;


class BookingController extends AbstractController
{
    #[Route('/booking', name: 'booking')]

    /**
     * Summary of booking
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Repository\BookingRepository $bookingRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function booking(Request $request, BookingRepository $repo): Response
    {
        $booking = new Booking();   
        $bookingForm = $this->createForm(BookingFormType::class, $booking);
        $bookingForm->handleRequest($request); 
    
        if ($bookingForm ->isSubmitted() && $bookingForm->isValid()) {
            $repo->save($booking, true);
            $this->addFlash('success', 'La réservation a bien été ajoutée.');

            return $this->redirectToRoute('bookingvalid');
        }
    

        return $this->render('booking/index.html.twig', [
            'bookingForm' => $bookingForm->createView()
        ]);
    }
}
