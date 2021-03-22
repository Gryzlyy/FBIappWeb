<?php

namespace App\Controller;

use App\Entity\Agents;
use App\Form\AddAgentFormType;
use App\Repository\AgentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentsController extends AbstractController
{
    #[Route('/agents', name: 'agents_index')]
    public function index(AgentsRepository $agentsRepository): Response
    {
        return $this->render('agents/index.html.twig', [
            'agents' => $agentsRepository->findAll(),
        ]);
    }

    /**
     * @Route ("/agents/{id}", name="agent_details")
     */
    public function showAgent(int $id, AgentsRepository $agentsRepository): Response
    {
        return $this->render('agents/showAgent.html.twig', [
            'agent' => $agentsRepository->find($id),
        ]);
    }

    /**
     * @Route ("/agents-add", name="agent_add")
     */
    public function addAgent(Request $request): Response
    {
        $agent = new Agents();
        $form = $this->createForm(AddAgentFormType::class, $agent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($agent);
            $entityManager->flush();

            return $this->redirectToRoute('agents_index');
        }

        return $this->render('agents/addAgent.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
