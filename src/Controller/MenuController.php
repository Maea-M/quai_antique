<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MenuRepository;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'menu')]
    public function index(MenuRepository $menuRepository): Response
    {
        $menu = $menuRepository ->findBy([], ['id' => 'asc']);

        return $this->render('menu/index.html.twig', [
            'menu' => $menu,
        ]);
    }
}
