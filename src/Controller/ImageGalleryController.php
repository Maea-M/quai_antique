<?php

namespace App\Controller;

use App\Entity\ImageGallery;

use App\Repository\ImageGalleryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ImageGalleyRepository;

class ImageGalleryController extends AbstractController
{
    #[Route('/imagegallery', name: 'image_gallery')]

    public function index(ImageGalleryRepository $imageGalleryRepository): Response
    {
        $imageGalleries = $imageGalleryRepository->findAll();
        return $this->render('image_gallery/index.html.twig', [
        ]);
    }
}