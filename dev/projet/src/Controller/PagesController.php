<?php

namespace App\Controller;

use App\Repository\ConstelationRepository;
use App\Repository\EtoileRepository;
use App\Repository\PositionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/pages')]
class PagesController extends AbstractController
{
    #[Route('/', name: 'app_pages')]
    public function index(PositionRepository $positionRepository,EtoileRepository $etoileRepository, ConstelationRepository $constelationRepository): Response
    {
        return $this->render('pages/index.html.twig', [
            'positions' => $positionRepository->findAll(),
            'etoiles' => $etoileRepository->findAll(),
            'constelations' => $constelationRepository->findAll(),
        ]);
    }
}
