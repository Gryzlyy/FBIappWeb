<?php

namespace App\Controller;

use App\Repository\TargetsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TargetsController extends AbstractController
{
    #[Route('/targets', name: 'targets_index')]
    public function index(TargetsRepository $targetsRepository): Response
    {
        return $this->render('targets/index.html.twig', [
            'targets' => $targetsRepository->findAll(),
        ]);
    }

    /**
     * @Route ("/targets/{id}", name="target_details")
     */
    public function showAgent(int $id, TargetsRepository $targetsRepository): Response
    {
        return $this->render('targets/showTarget.html.twig', [
            'target' => $targetsRepository->find($id),
        ]);
    }
}
