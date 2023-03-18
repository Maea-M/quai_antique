<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FormulaRepository;

class FormulaController extends AbstractController
{
    #[Route('/formula', name: 'formula')]
    public function index(FormulaRepository $formulaRepository): Response
    {
        $formula = $formulaRepository ->findBy([], ['id' => 'asc']);

        return $this->render('home/formula/index.html.twig', [
            'formula' => $formula,
        ]);
    }
}
