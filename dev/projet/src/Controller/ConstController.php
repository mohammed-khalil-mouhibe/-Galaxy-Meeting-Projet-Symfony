<?php

namespace App\Controller;

use App\Entity\Constelation;
use App\Repository\ConstelationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConstController extends AbstractController
{
    #[Route('/const', name: 'app_const')]
    public function index( ConstelationRepository $constelationRepository): Response
    {
        return $this->render('const/index.html.twig', [

            'constelations' => $constelationRepository->findAll(),
        ]);
    }

}
