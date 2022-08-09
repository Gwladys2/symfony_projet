<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactMeController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact_me")
     */
    public function index(): Response
    {
        return $this->render('contact_me/index.html.twig');
    }
}
