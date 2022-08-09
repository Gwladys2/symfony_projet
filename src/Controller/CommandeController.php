<?php

namespace App\Controller;

use App\Form\CommandeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="app_commande")
     */
    public function index()
    {
        $form=$this->createForm(CommandeType::class, null,[
            'user'=>$this->getUser()
        ]);
        return $this->render('commande/index.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
