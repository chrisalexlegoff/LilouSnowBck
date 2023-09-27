<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    // private $adminContextProvider;

    // public function __construct(AdminContextProvider $adminContextProvider)
    // {
    //     $this->adminContextProvider = $adminContextProvider;
    // }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // $this->adminContextProvider->getContext();
        // return $this->render('home/index.html.twig', [
        //     'controller_name' => 'HomeController',
        // ]);
        // return $this->render('admin/index.html.twig', [
        //     'controller_name' => 'DashboardController',
        // ]);
        return $this->redirectToRoute('admin');
    }
}
