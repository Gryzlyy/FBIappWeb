<?php

namespace App\Controller;

use App\Repository\HideoutsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HideoutsController extends AbstractController
{
    #[Route('/hideouts', name: 'hideouts_index')]
    public function index(HideoutsRepository $hideoutsRepository): Response
    {
        return $this->render('hideouts/index.html.twig', [
            'hideouts' => $hideoutsRepository->findAll(),
        ]);
    }

    /**
     * @Route ("/hideouts/{id}", name="hideout_details")
     */
    public function showHideout(int $id, HideoutsRepository $hideoutsRepository): Response
    {
        return $this->render('hideouts/showHideout.html.twig', [
            'hideout' => $hideoutsRepository->find($id),
        ]);
    }
}
