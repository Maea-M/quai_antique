<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        //$error = $authenticationUtils->getLastAuthenticationError();
        //$lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('login/index.html.twig', [
            //'last_username' => $lastUsername,
            //'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
