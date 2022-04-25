<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwinsController extends AbstractController
{
    #[Route('/twins', name: 'app_twins')]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('twins/index.html.twig', [
            'controller_name' => 'TwinsController',
            'users' => $userRepository->findAll(),
        ]);
    }
}
