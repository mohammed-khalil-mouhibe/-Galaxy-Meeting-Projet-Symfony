<?php

namespace App\Controller;

use App\Entity\Constelation;
use App\Form\ConstelationType;
use App\Repository\ConstelationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/constelation')]
class ConstelationController extends AbstractController
{
    #[Route('/', name: 'app_constelation_index', methods: ['GET'])]
    public function index(ConstelationRepository $constelationRepository): Response
    {
        return $this->render('constelation/index.html.twig', [
            'constelations' => $constelationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_constelation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ConstelationRepository $constelationRepository): Response
    {
        $constelation = new Constelation();
        $form = $this->createForm(ConstelationType::class, $constelation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $constelationRepository->add($constelation);
            return $this->redirectToRoute('app_constelation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constelation/new.html.twig', [
            'constelation' => $constelation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_constelation_show', methods: ['GET'])]
    public function show(Constelation $constelation): Response
    {
        return $this->render('constelation/show.html.twig', [
            'constelation' => $constelation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_constelation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Constelation $constelation, ConstelationRepository $constelationRepository): Response
    {
        $form = $this->createForm(ConstelationType::class, $constelation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $constelationRepository->add($constelation);
            return $this->redirectToRoute('app_constelation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constelation/edit.html.twig', [
            'constelation' => $constelation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_constelation_delete', methods: ['POST'])]
    public function delete(Request $request, Constelation $constelation, ConstelationRepository $constelationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$constelation->getId(), $request->request->get('_token'))) {
            $constelationRepository->remove($constelation);
        }

        return $this->redirectToRoute('app_constelation_index', [], Response::HTTP_SEE_OTHER);
    }
}
