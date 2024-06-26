<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager=$entityManager;
    }
    /**
     * @Route("/message", name="app_register")
     */
    public function index(Request $request)
    {
        $user=new User();
        $form=$this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $user=$form->getData();
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            return $this->render('affiche_message/index.html.twig');
        }

        return $this->render('register/index.html.twig', [
            'form' =>$form->createView()
        ]);
    }
}
