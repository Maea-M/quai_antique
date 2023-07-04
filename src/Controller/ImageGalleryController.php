<?php

namespace App\Controller;

use App\Repository\ImageGalleryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageGalleryController extends AbstractController
{
    #[Route('/imagegallery', name: 'image_gallery')]

    public function index(ImageGalleryRepository $imageGalleryRepository): Response
    {
        return $this->render('image_gallery/index.html.twig', [
            'image'=> $imageGalleryRepository->findBy([])
        ]);
    }
}