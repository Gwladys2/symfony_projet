<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyRealisationsController extends AbstractController
{
    /**
     * @Route("/realisations", name="app_my_realisations")
     */
    public function index()
    {
        return $this->render('my_realisations/index.html.twig');
    }
}
