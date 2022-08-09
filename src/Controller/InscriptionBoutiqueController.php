<?php

namespace App\Controller;

use App\Entity\BoutiqueUser;
use App\Form\InscriptionBoutiqueType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class InscriptionBoutiqueController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager=$entityManager;
    }
    /**
     * @Route("/inscription/boutique", name="app_inscription_boutique")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $utilisateur=new BoutiqueUser(); // entity BoutiqueUser (la table de la base de donnée)

        $form=$this->createForm(InscriptionBoutiqueType::class, $utilisateur); // on cré un formulaire grace à la méthode createForm et la class InscriptionBoutiqueType que l'on injecte dans la variable utilisateur
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $utilisateur=$form->getData();

            $password=$encoder->encodePassword($utilisateur,$utilisateur->getPassword());

            $utilisateur->setPassword($password);

            $this->entityManager->persist($utilisateur);
            $this->entityManager->flush();
            return $this->render('affiche_inscription/index.html.twig');
        }

        return $this->render('inscription_boutique/index.html.twig',[
            'formulaire'=>$form->createView()
        ]);
    }
}
