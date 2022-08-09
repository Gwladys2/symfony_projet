<?php

namespace App\Controller;

use App\Entity\User;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AfficheMessageController extends AbstractController
{
    /**
     * @Route("affiche/message/", name="app_affiche_message")
     */

    public function index()
    {
        return $this->render('affiche_message/index.html.twig');

    }
}

