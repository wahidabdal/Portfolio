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
}
