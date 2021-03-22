<?php

namespace App\Controller;

use App\Repository\SkillsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    #[Route('/skills', name: 'skills_index')]
    public function index(SkillsRepository $skillsRepository): Response
    {
        return $this->render('skills/index.html.twig', [
            'skills' => $skillsRepository->findAll(),
        ]);
    }

    /**
     * @Route ("/skills/{id}", name="skill_details")
     */
    public function showSkill(int $id, SkillsRepository $skillsRepository): Response
    {
        return $this->render('skills/showSkill.html.twig', [
            'skill' => $skillsRepository->find($id),
        ]);
    }
}
