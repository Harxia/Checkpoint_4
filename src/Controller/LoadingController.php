<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoadingController extends AbstractController
{
    #[Route('/loading', name: 'app_loading')]
    public function index(): Response
    {
        return $this->render('loading/index.html.twig', [
            'controller_name' => 'LoadingController',
        ]);
    }
}
