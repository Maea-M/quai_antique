<?php

namespace App\Controller\Admin;

use App\Entity\Booking;
use App\Entity\Formula;
use App\Entity\ImageGallery;
use App\Entity\Meal;
use App\Entity\Menu;
use App\Entity\User;
use App\Entity\OpenHour;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractDashboardController
{
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('home/admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Quai Antique');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-dashboard');
        yield MenuItem::linkToCrud('Plat', 'fa-solid fa-kitchen-set', Meal::class);
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud("Horaires d'ouverture", 'fa-solid fa-clock', OpenHour::class);
        yield MenuItem::linkToCrud('Menu', 'fa fa-clipboard', Menu::class);
        yield MenuItem::linkToCrud("Galerie d'images", 'fa-solid fa-image', ImageGallery::class);
        yield MenuItem::linkToCrud('Formule', 'fa-solid fa-utensils', Formula::class);
        yield MenuItem::linkToCrud('Réservation', 'fa-solid fa-receipt', Booking::class);

    }
}
