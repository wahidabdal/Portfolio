<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WahidController extends AbstractController
{
    #[Route('/wahid', name: 'app_wahid')]
    public function index(): Response
    {
        return $this->render('wahid/index.html.twig', [
            'controller_name' => 'WahidController',
        ]);
    }

     #[Route('/wahid/plus', name: 'app_wahid_plus')]
    public function plus(): Response
    {
        return $this->render('wahid/plus.html.twig', [
            'controller_name' => 'WahidController',
        ]);
    }
    
    #[Route('/wahid/cv', name: 'app_wahid__cv')]
    public function cv(): Response
    {
        return $this->render('wahid/cv.html.twig', [
            'controller_name' => 'WahidController',
        ]);
    }

    #[Route('/wahid/formul', name: 'app_wahid_cv')]
    public function formul(): Response
    {
        return $this->render('wahid/formul.html.twig', [
            'controller_name' => 'WahidController',
        ]);
    }

    #[Route('/wahid/portfolio', name: 'app_wahid_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('wahid/portfolio.html.twig', [
            'controller_name' => 'WahidController',
        ]);
    }

    #[Route('/wahid/change', name: 'app_wahid_change')]
    public function change(): Response
    {
        return $this->render('wahid/change.html.twig', [
            'controller_name' => 'WahidController',
        ]);
    }

    #[Route('/wahid/formul/recup', name: 'app_wahid_change_recup')]
    public function recup(): Response
    {
        return $this->render('wahid/recupération_données.php', [
            'controller_name' => 'WahidController',
        ]);
    }
}
