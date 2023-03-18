<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MealRepository;

class MealController extends AbstractController
{
    #[Route('/meal', name: 'meal')]
    /**
     * Summary of index
     * @param MealRepository $mealRepository
     * @return Response
     */
    public function index(MealRepository $mealRepository): Response
    {
        $meal = $mealRepository ->findBy([], ['id' => 'asc']);

        return $this->render('meal/index.html.twig', [
            'meal' => $meal,
        ]);
    }
}
