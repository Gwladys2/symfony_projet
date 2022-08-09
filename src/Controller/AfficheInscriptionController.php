<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AfficheInscriptionController extends AbstractController
{
    /**
     * @Route("/affiche/inscription", name="app_affiche_inscription")
     */
    public function index(): Response
    {
        return $this->render('affiche_inscription/index.html.twig');
    }
}
