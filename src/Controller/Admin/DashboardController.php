<?php

namespace App\Controller\Admin;

use App\Entity\AvantApres;
use App\Entity\Avis;
use App\Entity\Collaborateur;
use App\Entity\Methode;
use App\Entity\Question;
use App\Entity\Social;
use App\Entity\User;
use App\Entity\Presentation;
use App\Entity\Realisation;
use App\Entity\Tarif;
use App\Entity\Temoignage;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        return $this->render('admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Lilousnowbck')
            ->setFaviconPath('images/favicon-32x32.png');
    }

    // public function configureAssets(): Assets
    // {
    //     return parent::configureAssets()->addWebpackEncoreEntry('admin');
    // }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-list', User::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Réseaux', 'fa fa-share-nodes', Social::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Questions', 'fa fa-question', Question::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Presentation', 'fa fa-video', Presentation::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Collaborateurs', 'fa fa-user', Collaborateur::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Temoignages', 'fa fa-gear', Temoignage::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Avant - après', 'fa fa-image', AvantApres::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Tarifs', 'fa fa-barcode', Tarif::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Méthodes', 'fa fa-microchip', Methode::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Réalisations', 'fa-brands fa-r-project', Realisation::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Avis', 'fa-regular fa-comment', Avis::class)->setPermission('ROLE_ADMIN');
    }
}
