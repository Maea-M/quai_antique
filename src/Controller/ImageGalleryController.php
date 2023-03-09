<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageGalleryController extends AbstractController
{
    #[Route('/image/gallery', name: 'app_image_gallery')]
    public function index(): Response
    {
        return $this->render('image_gallery/index.html.twig', [
            'controller_name' => 'ImageGalleryController',
        ]);
    }
}
