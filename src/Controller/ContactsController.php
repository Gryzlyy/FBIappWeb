<?php

namespace App\Controller;

use App\Repository\ContactsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'contacts_index')]
    public function index(ContactsRepository $contactsRepository): Response
    {
        return $this->render('contacts/index.html.twig', [
            'contacts' => $contactsRepository->findAll(),
        ]);
    }

    /**
     * @Route ("/contacts/{id}", name="contact_details")
     */
    public function showContact(int $id, ContactsRepository $contactsRepository): Response
    {
        return $this->render('contacts/showContact.html.twig', [
            'contact' => $contactsRepository->find($id),
    ]);
    }
}
