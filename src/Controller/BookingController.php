<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Form\BookingFormType;
use Doctrine\ORM\EntityManagerInterface;
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
     * @param \Doctrine\ORM\EntityManagerInterface $entityManager
     * @param \App\Repository\BookingRepository $bookingRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function booking(Request $request, EntityManagerInterface $entityManager): Response
    {
        $booking = new Booking();   
        $bookingForm = $this->createForm(BookingFormType::class, $booking);
        $bookingForm->handleRequest($request); 
    
        if ($bookingForm ->isSubmitted() && $bookingForm->isValid()) {
            $booking->getName();
            $booking->getNumberGuest();
            $booking->getDate();
            $booking->getHour();
            $booking->getAllergy();

            $entityManager->persist($booking);
            $entityManager->flush();

            return $this->redirectToRoute('bookingvalid');

        }
    

        return $this->render('booking/index.html.twig', [
            'bookingForm' => $bookingForm->createView()
        ]);
    }
}
